$(document).on("ready", function(){
  
  $("footer").ready(getRepo);
  
});



function getRepo(){
  URL = now + "index.php/api/repororestcontroller/getReportegeneral/format/json/"; 

  $.get(URL).done(function(data){
        

        numeroMorales = data.numeropersonamoral;
        numeroFisicas = data.numeropersonasfisicas;
        total = data.totalclientes;

        alertasMorales = data.numeroalertasmorales; 
        alertasFisicas = data.numeroalertasfisicas;
        totalAlertas = data.TotalAlertas;

        numeroOGRAVESfisicas = data.numeroOGRAVESfisicas;
        numeroOGRAVESmorales = data.numeroOGRAVESmorales;
        TotalOGRAVES = data.TotalOGRAVES;

        expedientesMorales = data.ExpedientesPersonasMorales;
        expedientesFisicos = data.ExpedientesPersonasFisicas;
        totalExpedientes = data.TotalExpedientes;

        omisionesmorales = data.omisionesmorales;
        omisionesfi = data.omisionesfi;
        TotalSinOmisiones = data.TotalSinOmisiones;

        Otro_omisionesmorales = data.Otro_omisionesmorales;
        Otro_omisionesfi = data.Otro_omisionesfi;
        Otro_TotalSinOmisiones = data.Otro_TotalSinOmisiones;

        llenaelementoHTML( "#personasMorales", numeroMorales );
        llenaelementoHTML( "#personasFisicas", numeroFisicas );
        llenaelementoHTML( "#numeroclientes", total );
        
        llenaelementoHTML( "#expedientesMorales", expedientesMorales );
        llenaelementoHTML( "#expedientesFisicas", expedientesFisicos );
        llenaelementoHTML( "#totalExpedientes", totalExpedientes );

        
        //llenaelementoHTML( "#alertasMorales", alertasMorales );
        llenaelementoHTML( "#alertasMorales", numeroOGRAVESmorales );
        //llenaelementoHTML( "#alertasFisicas", alertasFisicas );
        llenaelementoHTML( "#alertasFisicas", numeroOGRAVESfisicas );
        llenaelementoHTML( "#numeroAlertas", TotalOGRAVES );
        //llenaelementoHTML( "#numeroAlertas", totalAlertas );

        llenaelementoHTML( "#TotalOmisionesNoGraves", TotalSinOmisiones );
        llenaelementoHTML( "#OmisionesNoGravesFisicas", omisionesfi );
        llenaelementoHTML( "#OmisionesNoGravesMorales", omisionesmorales );

        llenaelementoHTML( "#TotalSinOmisiones", Otro_TotalSinOmisiones );
        llenaelementoHTML( "#SinOmisionesFisicas", Otro_omisionesfi );
        llenaelementoHTML( "#SinOmisionesMorales", Otro_omisionesmorales );

        llenaelementoHTML( "#alertasMorales1", numeroOGRAVESmorales );
        llenaelementoHTML( "#alertasFisicas1", numeroOGRAVESfisicas );
        llenaelementoHTML( "#OmisionesNoGravesFisicas1", omisionesfi );
        llenaelementoHTML( "#OmisionesNoGravesMorales1", omisionesmorales );
        llenaelementoHTML( "#SinOmisionesFisicas1", Otro_omisionesfi );
        llenaelementoHTML( "#SinOmisionesMorales1", Otro_omisionesmorales );

        porcentajeClientesMorales = (numeroMorales*100)/total;
        porcentajeClientesFisicos = (numeroFisicas*100)/total;
        porcentajeAlertasMorales= (numeroOGRAVESmorales*100)/TotalOGRAVES;
        porcentajeAlertasFisicas= (numeroOGRAVESfisicas*100)/TotalOGRAVES;
        porcentajeExpedientesMorales = (expedientesMorales*100)/totalExpedientes;
        porcentajeExpedientesFisicos = (expedientesFisicos*100)/totalExpedientes;
        porcentajeOmisionesNoGravesFisicas = (omisionesfi*100)/TotalSinOmisiones;
        porcentajeOmisionesNoGravesMorales = (omisionesmorales*100)/TotalSinOmisiones;

        llenaelementoHTML( "#porcentajePersonasMorales", porcentajeClientesMorales.toFixed(2) + " %" );
        llenaelementoHTML( "#porcentajePersonasFisicas", porcentajeClientesFisicos.toFixed(2) + " %" );
        llenaelementoHTML( "#porcentajeAlertasMorales", porcentajeAlertasMorales.toFixed(2) + " %" );
        llenaelementoHTML( "#porcentajeAlertasFisicas", porcentajeAlertasFisicas.toFixed(2) + " %" );
        llenaelementoHTML( "#porcentajeExpedientesMorales", porcentajeExpedientesMorales.toFixed(2) + " %" );
        llenaelementoHTML( "#porcentajeExpedientesFisicas", porcentajeExpedientesFisicos.toFixed(2) + " %" );
        llenaelementoHTML( "#porcentajeOmisionesNoGravesFisicas", porcentajeOmisionesNoGravesFisicas.toFixed(2) + " %" );
        llenaelementoHTML( "#porcentajeOmisionesNoGravesMorales", porcentajeOmisionesNoGravesMorales.toFixed(2) + " %" );
        


        getGraph(numeroMorales , numeroFisicas , numeroOGRAVESmorales , numeroOGRAVESfisicas, expedientesMorales , expedientesFisicos ,  omisionesfi , omisionesmorales , Otro_omisionesfi , Otro_omisionesmorales );
        
    }).fail(function(){

      alert("error al cargar cantidad de personas morales");
      //llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

    });

}/*Termina la función */

//function getGraph(numeroMorales , numeroFisicas , total, alertasMorales , alertasFisicas , totalAlertas , expedientesMorales , expedientesFisicos , totalExpedientes , omorales, omisionesfi ){

function getGraph(numeroMorales , numeroFisicas , numeroOGRAVESmorales , numeroOGRAVESfisicas ,  expedientesMorales , expedientesFisicos ,  omisionesfi , omisionesmorales , Otro_omisionesfi , Otro_omisionesmorales ){

  var dataclientes = new google.visualization.arrayToDataTable([

                  ['', 'Cantidad'],
                  ["Personas Físicas", numeroFisicas ],
                  ["Personas Morales", numeroMorales]
                  //["Total", total]   
                ]);

        var options = {
          title: 'Clientes en el Sistema',
          is3D: true,
          fontSize: 15
        };

        var chart = new google.visualization.PieChart(document.getElementById('clientes-pastel'));
        chart.draw(dataclientes, options);
     







  var dataExpedientes = new google.visualization.arrayToDataTable([

                  ['', 'Cantidad'],
                  ["Personas Físicas", expedientesFisicos],
                  ["Personas Morales", expedientesMorales]
                  //["Total", totalExpedientes]   
                ]);

        var options = {
          title: 'Expedientes en el Sistema',
          is3D: true,
          fontSize: 15
        };

        var chart = new google.visualization.PieChart(document.getElementById('Expedientes-pastel'));
        chart.draw(dataExpedientes, options);
     

 


/*Gráficas barras   */

 var data3 = google.visualization.arrayToDataTable([
          ['', 'Omisiones graves' , { role: 'style' } ],
          ["Personas Físicas", numeroOGRAVESfisicas, 'background: #e5e4e2' ],
          ["Personas Morales", numeroOGRAVESmorales , 'red' ],
          

      ]);



  var view = new google.visualization.DataView(data3);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         type: "string",
                         role: "annotation" },
                       2]);

      var options1 = {
        title: 'Omisiones Graves en el Sistema',
        bar: {groupWidth: "100%"},
        legend: { position: "none" },
          fontSize: 15
      };
      var chart1 = new google.visualization.ColumnChart(document.getElementById("top_x_div"));
      chart1.draw(view,  google.charts.Bar.convertOptions(options1));
 
var data4 = google.visualization.arrayToDataTable([
        ['', 'Omisiones' ,  { role: 'style' }],
          ["Personas Físicas", omisionesfi, 'background: #e5e4e2'],
          ["Personas Morales", omisionesmorales , 'red']

      ]);

      var view = new google.visualization.DataView(data4);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: 'Omisiones en el Sistema',
        bar: {groupWidth: "100%"},
        legend: { position: "none" },
        fontSize: 15
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("top_x_div2"));
      chart.draw(view,  google.charts.Bar.convertOptions(options));



 var data5 = google.visualization.arrayToDataTable([
          ['', 'Sin Omisiones' , { role: 'style' } ],
          ["Personas Físicas", Otro_omisionesfi, 'background: #e5e4e2' ],
          ["Personas Morales", Otro_omisionesmorales , 'red' ],
          

      ]);




  var view = new google.visualization.DataView(data5);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         type: "string",
                         role: "annotation" },
                       2]);

      var options2 = {
        title: 'Sin Omisiones en el Sistema',
        bar: {groupWidth: "100%"},
        legend: { position: "none" },
        fontSize: 15
      };
      var chart2 = new google.visualization.ColumnChart(document.getElementById("top_x_div3"));
      chart2.draw(view,  google.charts.Bar.convertOptions(options2));




}







/**********************************************************************************************/