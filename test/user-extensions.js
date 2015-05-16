var gotoLabels= {};
var whileLabels = {};

// overload the original Selenium reset function
Selenium.prototype.reset = function() {
    // reset the labels
    this.initialiseLabels();
    // proceed with original reset code
    this.defaultTimeout = Selenium.DEFAULT_TIMEOUT;
    this.browserbot.selectWindow("null");
    this.browserbot.resetPopups();
}

Selenium.prototype.initialiseLabels = function()
{
    gotoLabels = {};
    whileLabels = { ends: {}, whiles: {} };
    var command_rows = [];
    var numCommands = testCase.commands.length;
    for (var i = 0; i < numCommands; ++i) {
        var x = testCase.commands[i];
        command_rows.push(x);
    }
    var cycles = [];
    for( var i = 0; i < command_rows.length; i++ ) {
        if (command_rows[i].type == 'command')
        switch( command_rows[i].command.toLowerCase() ) {
            case "label":
                gotoLabels[ command_rows[i].target ] = i;
                break;
            case "while":
            case "endwhile":
                cycles.push( [command_rows[i].command.toLowerCase(), i] )
                break;
        }
    }  
    var i = 0;
    while( cycles.length ) {
        if( i >= cycles.length ) {
            throw new Error( "non-matching while/endWhile found" );
        }
        switch( cycles[i][0] ) {
            case "while":
                if( ( i+1 < cycles.length ) && ( "endwhile" == cycles[i+1][0] ) ) {
                    // pair found
                    whileLabels.ends[ cycles[i+1][1] ] = cycles[i][1];
                    whileLabels.whiles[ cycles[i][1] ] = cycles[i+1][1];
                    cycles.splice( i, 2 );
                    i = 0;
                } else ++i;
                break;
            case "endwhile":
                ++i;
                break;
        }
    }
}

Selenium.prototype.continueFromRow = function( row_num )
{
    if(row_num == undefined || row_num == null || row_num < 0) {
        throw new Error( "Invalid row_num specified." );
    }
    testCase.debugContext.debugIndex = row_num;
}

// do nothing. simple label
Selenium.prototype.doLabel = function(){};

Selenium.prototype.doGotolabel = function( label )
{
    if( undefined == gotoLabels[label] ) {
        throw new Error( "Specified label '" + label + "' is not found." );
    }
    this.continueFromRow( gotoLabels[ label ] );
};

Selenium.prototype.doGoto = Selenium.prototype.doGotolabel;

Selenium.prototype.doGotoIf = function( condition, label )
{
    if( eval(condition) ) this.doGotolabel( label );
}

Selenium.prototype.doWhile = function( condition )
{
    if( !eval(condition) ) {
        var last_row = testCase.debugContext.debugIndex;
        var end_while_row = whileLabels.whiles[ last_row ];
        if( undefined == end_while_row ) throw new Error( "Corresponding 'endWhile' is not found." );
        this.continueFromRow( end_while_row );
    }
}

Selenium.prototype.doEndWhile = function()
{
    var last_row = testCase.debugContext.debugIndex;
    var while_row = whileLabels.ends[ last_row ] - 1;
    if( undefined == while_row ) throw new Error( "Corresponding 'While' is not found." );
    this.continueFromRow( while_row );
}

/*
NAME:
    datadriven

PURPOSE:
    Basic data driven testing.

EXAMPLE USE:
    The structure of your data driven test case will be;
    -------------------------------------------
    COMMAND       |TARGET          |VALUE
    -------------------------------------------
    loadTestData  |<file path>     |
    while         |!testdata.EOF() |
    testcommand1  |                |
    testcommand...|                |
    testcommandn  |                |
    endWhile      |                |
    -------------------------------------------

*/

//Función para serializar la información XML
var XML = {};
XML.serialize = function(node) {
if (typeof XMLSerializer != "undefined")
return (new XMLSerializer()).serializeToString(node) ;
else if (node.xml) return node.xml;
else throw "XML.serialize is not supported or can't serialize " + node;
}
/*
XML.serialize = function(node) {
    if (typeof XMLSerializer != "undefined")
        return (new XMLSerializer()).serializeToString(node) ;
    else if (node.xml) return node.xml;
    else throw "XML.serialize is not supported or can't serialize " + node;

}
*/

//Inicializa las variables con las clales se va a trabajar
function xmlTestData() {
    this.xmlDoc = null;
    this.testdata = null;
    this.index = null;
    this.elemento = null;
    this.testElemento = null;
}

//Carga la información del documento XML
xmlTestData.prototype.load = function(xmlloc) {

	//Crea el objeto para trabajar con el documento XML
	if (window.XMLHttpRequest)
	{
		this.xmlDoc=new XMLHttpRequest();
	}
	else
	{
		this.xmlDoc=new ActiveXObject("Microsoft.XMLHTTP");
	}

	try {
		//Obtiene el documento XML
		this.xmlDoc.open("GET",xmlloc,false);
		this.xmlDoc.send();        

		this.index = 0;	
		//Obtiene los datos del XML
		//Por defecto toma el TAG "Row"	pues se va a trabajar con un documento de Excel 2007 de tipo "Datos XML"
		this.testdata = this.xmlDoc.responseXML.getElementsByTagName("Row");
	}
	catch(e) {
		LOG.info("No se pudo iniciar el objeto, revisar la función 'load'"); 
	}

	if (this.testdata == null || this.testdata.length == 0) {	
		LOG.info("No se pudieron cargar los datos o No existen datos.");
	}

}

//Valida que no sea Fin de Archivo
xmlTestData.prototype.EOF = function() {
    if (this.index != null && this.index < this.testdata.length) 
	return false;
    return true;
}

//Selecciona el siguiente grupo de datos (siguiente fila)
xmlTestData.prototype.next = function() {

	//Valida que haya datos en el archivo.
	if (this.EOF()) {
		LOG.error("No hay datos en el archivo.");
		return;
	}

	// Imprime los elementos XML seleccionados
	LOG.info(XML.serialize(this.testdata[this.index]));    
      
	//Selecciona todos los nodos
	x=this.testdata[this.index].childNodes;
	//LOG.info("Pasó X");
	//Almacena el valor y luego el nombre de la variable
	for (i=0;i<x.length;i++)
	{
		//LOG.info("I = "+i);
		//Si es un elemento; almacena el dato
		if(x[i].nodeType == 1)
		{	
			try
			{
				//Almacena el valor y luego el nombre de la variable			
				selenium.doStore(x[i].childNodes[0].nodeValue, x[i].nodeName);
			}
			catch(e) {
				//Almacena el valor y luego el nombre de la variable			
				selenium.doStore("", x[i].nodeName);
			}
		}
	} 
    	//Para que seleccione la siguiente fila
	this.index++;

}

Selenium.prototype.testdata = null;
Selenium.prototype.testElemento = null;

//Función que envía a cargar la información de XML
// argumentos:
//	xmlloc -> Dirección en donde se encuentra el archivo XML de donde se va a tomar los datos; 
//		  Ejemplo: linux: file:///home/usuario/prueba/datos.xml
//				windows file:///D:/prueba/datos.xml
Selenium.prototype.doLoadTestData = function(xmlloc) {
    testdata = new xmlTestData();
    testdata.load(xmlloc);
};

//Hace que se lea los datos del siguiente registro (Siguiente fila)
Selenium.prototype.doNextTestData = function() {
    testdata.next();
}; 

//Para saber si un elemento está presente
xmlTestData.prototype.elementoPresente = function() {
    var resultado = true; 
    locator = this.elemento;    
    return selenium.doElementoPresente(locator);
}; 

//Para saber si un elemento NO está presente
xmlTestData.prototype.elementoNoPresente = function() {
    var resultado = false; 
    locator = this.elemento;
    return selenium.doElementoNoPresente(locator);
}; 

//Para saber si un elemento está presente (Función extensión de Selenium)
Selenium.prototype.doElementoPresente = function(locator) {
    var resultado = true;
    try {
        this.page().findElement(locator);
	selenium.doEcho("Elemento " + locator + " ha sido encontrado.");
        testElemento.imprimirFecha();
    } catch (e) {//si no lo encuentra retorna false
	resultado = false;
        selenium.doEcho("Elemento " + locator + " no encontrado.");
        testElemento.imprimirFecha();
    }
    //alert('Resultado=' + resultado);
    return resultado;
}; 

//Para saber si un elemento NO está presente
Selenium.prototype.doElementoNoPresente = function(locator) {
    var resultado = false;   
    try {
        this.page().findElement(locator);
	selenium.doEcho("Elemento " + locator + " ha sido encontrado.");	
        testElemento.imprimirFecha();
    } catch (e) {//si no lo encuentra retorna false
	resultado = true;
        selenium.doEcho("Elemento " + locator + " no encontrado.");
        testElemento.imprimirFecha();
    }
    //alert('Resultado=' + resultado);
    return resultado;    
    
}; 

//Para especificar el elemento que se va a controlar
Selenium.prototype.doLoadElemento = function(elementoP) {
    if(this.testElemento == null){testElemento = new xmlTestData();}
    testElemento.loadElemento(elementoP);
};

//Asigna el valor a la variable global "elemento"
xmlTestData.prototype.loadElemento = function(elementoP) {
    this.elemento = elementoP;
    selenium.doEcho("Elemento = " + this.elemento);
};

//Funcion para imprimir la fecha
xmlTestData.prototype.imprimirFecha = function () {  
   
   var fecha = new Date();

   var nombres_dias = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado")  
   var nombres_meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre","Noviembre", "Diciembre");  
  
   var dia_mes = fecha.getDate(); //dia del mes  
   var dia_semana = fecha.getDay(); //dia de la semana  
   var mes = fecha.getMonth() + 1;  
   var anio = fecha.getFullYear();  //año de 4 digitos  
   var horas = fecha.getHours();  
   var minutos = fecha.getMinutes();  
   var segundos = fecha.getSeconds(); 

   //imprime los valores
   selenium.doEcho(nombres_dias[dia_semana] + ", " + dia_mes + " de " + nombres_meses[mes - 1] + " de " + anio + " --- HORA: " + horas +":"+minutos+":"+segundos)  
}

