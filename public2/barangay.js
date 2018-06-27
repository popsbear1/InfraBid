 function updateBarangay(data){
        var select = document.getElementById('brgy');
        var text = data.options[data.selectedIndex].text;
        switch(text){
          case "Atok - 1101000":
            select.innerHTML="<option value = 'Abiang - 1101001'>Abiang - 1101001</option>"+
                              "<option value = 'Caliking - 1101002'>Caliking - 1101002</option>"+
                              "<option value = 'Cattubo - 1101003'>Cattubo - 1101003</option>"+
                              "<option value = 'Naguey - 1101004'>Naguey - 1101004</option>"+
                              "<option value = 'Paoay - 1101005'>Paoay - 1101005</option>"+
                              "<option value = 'Pasdong - 1101006'>Pasdong - 1101006</option>"+
                              "<option value = 'Poblacion(Atok) - 1101007'>Poblacion(Atok) - 1101007</option>"+
                              "<option value = 'Topdac - 1101008'>Topdac - 1101008</option>"

            break;     

          case "Bakun - 1103000":
            select.innerHTML="<option value = 'Ampusongan - 1103001'>Ampusongan - 1103001</option>"+
                              "<option value = 'Bagu - 1103002'>Bagu - 1103002</option>"+
                              "<option value = 'Dalipey - 1103004'>Dalipey - 1103004</option>"+
                              "<option value = 'Gambang - 1103005'>Gambang - 1103005</option>"+
                              "<option value = 'Kayapa - 1103007'>Kayapa - 1103007</option>"+
                              "<option value = 'Poblacion(Bakun)'>Poblacion(Bakun) - 1103009</option>"+
                              "<option value = 'Sinacbat - 1103010'>Sinacbat - 1103010</option>"

            break;

          case "Bokod - 1104000":
            select.innerHTML="<option value = 'Ambuclao - 1104001'>Ambuclao - 1104001</option>"+
                              "<option value = 'Bila - 1104002'>Bila - 1104002</option>"+
                              "<option value = 'Bobok-Bisal - 1104003'>Bobok-Bisal - 1104003</option>"+
                              "<option value = 'Daclan - 1104004'>Daclan - 1104004</option>"+
                              "<option value = 'Ekip - 1104005'>Ekip - 1104005</option>"+
                              "<option value = 'Karao - 1104006'>Karao - 1104006</option>"+
                              "<option value = 'Nawal - 1104007'>Nawal - 1104007</option>"+
                              "<option value = 'Pito - 1104008'>Pito - 1104008</option>"+
                              "<option value = 'Poblacion(Bokod) - 1104009'>Poblacion(Bokod) - 1104009</option>"+
                              "<option value = 'Tikey - 1104010'>Tikey - 1104010</option>"
   
            break;

          case "Buguias - 1105000":
            select.innerHTML="<option value = 'Abatan - 1105001'>Abatan - 1105001</option>"+
                              "<option value = 'Amgaleyguey - 1105002'>Amgaleyguey - 1105002</option>"+
                              "<option value = 'Amlimay - 1105003'>Amlimay - 1105003</option>"+
                              "<option value = 'Baculongan Norte - 1105004'>Baculongan Norte - 1105004</option>"+
                              "<option value = 'Baculongan Sur - 1105014'>Baculongan Sur - 1105014</option>"+
                              "<option value = 'Bangao - 1105006'>Bangao - 1105006</option>"+
                              "<option value = 'Buyacaoan - 1105007'>Buyacaoan - 1105007</option>"+
                              "<option value = 'Calamagan - 1105008'>Calamagan - 1105008</option>"+
                              "<option value = 'Catlubong - 1105009'>Catlubong - 1105009</option>"+
                              "<option value = 'Lengaoan - 1105015'>Lengaoan - 1105015</option>"+
                              "<option value = 'Loo - 1105010'>Loo - 1105010</option>"+
                              "<option value = 'Natubleng - 1105012'>Natubleng - 1105012</option>"+
                              "<option value = 'Poblacion(Buguias)'>Poblacion(Buguias) - 1105013</option>"+
                              "<option value = 'Catlubong - 1105009'>Catlubong - 1105009</option>"+
                              "<option value = 'Sebang - 1105016'>Sebang - 1105016</option>"
        
            break;

          case "Itogon - 1106000":
            select.innerHTML="<option value = 'Ampucao - 1106001'>Ampucao - 1106001</option>"+
                              "<option value = 'Dalupirip - 1106002'>Dalupirip - 1106002</option>"+
                              "<option value = 'Gumatdang - 1106003'>Gumatdang - 1106003</option>"+
                              "<option value = 'Loacan - 1106004'>Loacan - 1106004</option>"+
                              "<option value = 'Poblacion(Itogon) - 1106005'>Poblacion(Itogon) - 1106005</option>"+
                              "<option value = 'Tinongdan - 1106006'>Tinongdan - 1106006</option>"+
                              "<option value = 'Tuding - 1106007'>Tuding - 1106007</option>"+
                              "<option value = 'Ucab - 1106008'>Ucab - 1106008</option>"+
                              "<option value = 'Virac - 1106009'>Virac - 1106009</option>"
           
            break;

          case "Kabayan - 1107000":
            select.innerHTML="<option value = 'Adaoay - 1107001'>Adaoay - 1107001</option>"+
                              "<option value = 'Anchukey - 1107002'>Anchukey - 1107002</option>"+
                              "<option value = 'Ballay - 1107003'>Ballay - 1107003</option>"+
                              "<option value = 'Bashoy - 1107004'>Bashoy - 1107004</option>"+
                              "<option value = 'Batan - 1107005'>Batan - 1107005</option>"+
                              "<option value = 'Duacan - 1107009'>Duacan - 1107009</option>"+
                              "<option value = 'Eddet - 1107010'>Eddet - 1107010</option>"+
                              "<option value = 'Gusaran - 1107012'>Gusaran - 1107012</option>"+
                              "<option value = 'Kabayan Barrio - 1107013'>Kabayan Barrio - 1107013</option>"+
                              "<option value = 'Lusod - 1107014'>Lusod - 1107014</option>"+
                              "<option value = 'Pacso - 1107016'>Pacso - 1107016</option>"+
                              "<option value = 'Poblacion(Kabayan) - 1107017'>Poblacion(Kabayan) - 1107017</option>"+
                              "<option value = 'Tawangan - 1107018'>Tawangan - 1107018</option>"
           
            break;

          case "Kapangan - 1108000":
            select.innerHTML="<option value = 'Balakbak - 1108001'>Balakbak - 1108001</option>"+
                              "<option value = 'Beleng-Belis - 1108002'>Beleng-Belis - 1108002</option>"+
                              "<option value = 'Boklaoan - 1108003'>Boklaoan - 1108003</option>"+
                              "<option value = 'Cayapes - 1108004'>Cayapes - 1108004</option>"+
                              "<option value = 'Cuba - 1108006'>Cuba - 1108006</option>"+
                              "<option value = 'Datakan - 110008'>Datakan - 110008</option>"+
                              "<option value = 'Gadang - 1108009'>Gadang - 1108009</option>"+
                              "<option value = 'Gaswiling - 1108010'>Gaswiling - 1108010</option>"+
                              "<option value = 'Labueg - 1108011'>Labueg - 1108011</option>"+
                              "<option value = 'Paykek - 1108013'>Paykek - 1108013</option>"+
                              "<option value = 'Poblacion(Kapangan) - 1108014'>Poblacion(Kapangan) - 1108014</option>"+
                              "<option value = 'Pongayan - 1108015'>Pongayan - 1108015</option>"+
                              "<option value = 'Pudong - 1108016'>Pudong - 1108016</option>"+
                              "<option value = 'Sagubo - 1108017'>Sagubo - 1108017</option>"+
                              "<option value = 'Taba-ao - 1108018'>Taba-ao - 1108018</option>"
            
            break;

          case "Kibungan - 1109000":
            select.innerHTML="<option value = 'Badeo - 1109001'>Badeo - 1109001</option>"+
                              "<option value = 'Lubo - 1109002'>Lubo - 1109002</option>"+
                              "<option value = 'Madaymen - 1109003'>Madaymen - 1109003</option>"+
                              "<option value = 'Palina - 1109004'>Palina - 1109004</option>"+
                              "<option value = 'Poblacion(Kibungan) - 1109005'>Poblacion(Kibungan) - 1109005</option>"+
                              "<option value = 'Sagpat - 1109006'>Sagpat - 1109006</option>"+
                              "<option value = 'Tacadang - 1109007'>Tacadang - 1109007</option>"
        
            break;

          case "La Trinidad - 1110000":
            select.innerHTML="<option value = 'Alapang - 1110001'>Alapang - 1110001</option>"+
                              "<option value = 'Alno - 1110002'>Alno - 1110002</option>"+
                              "<option value = 'Ambiong - 1110003'>Ambiong - 1110003</option>"+
                              "<option value = 'Bahong - 1110004'>Bahong - 1110004</option>"+
                              "<option value = 'Balili - 1110005'>Balili - 1110005</option>"+
                              "<option value = 'Beckel - 1110006'>Beckel - 1110006</option>"+
                              "<option value = 'Betag - 1110008'>Betag - 1110008</option>"+
                              "<option value = 'Bineng - 1110007'>Bineng - 1110007</option>"+
                              "<option value = 'Cruz - 1110009'>Cruz - 1110009</option>"+
                              "<option value = 'Lubas - 1110010'>Lubas - 1110010</option>"+
                              "<option value = 'Pico - 1110011'>Pico - 1110011</option>"+
                              "<option value = 'Poblacion(LTB) - 1110012'>Poblacion(LTB) - 1110012</option>"+
                              "<option value = 'Puguis - 1110013'>Puguis - 1110013</option>"+
                              "<option value = 'Shilan - 1110014'>Shilan - 1110014</option>"+
                              "<option value = 'Tawang - 111001'>Tawang - 1110015</option>"+
                              "<option value = 'Wangal - 1110016'>Wangal - 1110016</option>"
        
            break;

          case "Mankayan - 1111000":
            select.innerHTML="<option value = 'Balili - 1111001'>Balili - 1111001</option>"+
                              "<option value = 'Bedbed - 1111002'>Bedbed - 1111002</option>"+
                              "<option value = 'Bulalacao - 1111003'>Bulalacao - 1111003</option>"+
                              "<option value = 'Cabiten - 1111004'>Cabiten - 1111004</option>"+
                              "<option value = 'Colalo - 1111005'>Colalo - 1111005</option>"+
                              "<option value = 'Paco - 1111008'>Paco - 1111008</option>"+
                              "<option value = 'Guinaoang - 1111006'>Guinaoang - 1111006</option>"+
                              "<option value = 'Palasaan - 1111009'>Palasaan - 1111009</option>"+
                              "<option value = 'Poblacion(Mankayan) - 1111010'>Poblacion(Mankayan) - 1111010</option>"+
                              "<option value = 'Sapid - 1111011'>Sapid - 1111011</option>"+
                              "<option value = 'Tabio - 1111012'>Tabio - 1111012</option>"+
                              "<option value = 'Taneg - 1111013'>Taneg - 1111013</option>"
    
            break;

          case "Sablan - 1112000":
            select.innerHTML="<option value = 'Bagong - 1112002'>Bagong - 1112002</option>"+
                              "<option value = 'Balluay - 1112003'>Balluay - 1112003</option>"+
                              "<option value = 'Banangan - 1112004'>Banangan - 1112004</option>"+
                              "<option value = 'Banengbeng - 1112005'>Banengbeng - 1112005</option>"+
                              "<option value = 'Bayabas - 1112006'>Bayabas - 1112006</option>"+
                              "<option value = 'Kamog - 1112007'>Kamog - 1112007</option>"+
                              "<option value = 'Pappa - 1112010'>Pappa - 1112010</option>"+
                              "<option value = 'Poblacion(Sablan) - 1112011'>Poblacion(Sablan) - 1112011</option>"
        
            break;

          case "Tuba - 1113000":
            select.innerHTML="<option value = 'Ansagan - 1113001'>Ansagan - 1113001</option>"+
                              "<option value = 'Camp 3 - 1113003'>Camp 3 - 1113003</option>"+
                              "<option value = 'Camp 4 - 1113004'>Camp 4 - 1113004</option>"+
                              "<option value = 'Camp One - 1113002'>Camp One - 1113002</option>"+
                              "<option value = 'Nangalisan - 1113006'>Nangalisan - 1113006</option>"+
                              "<option value = 'Poblacion(Tuba) - 1113007'>Poblacion(Tuba) - 1113007</option>"+
                              "<option value = 'San Pascual - 1113008'>San Pascual - 1113008</option>"+
                              "<option value = 'Tabaan Norte - 1113009'>Tabaan Norte - 1113009</option>"+
                              "<option value = 'Tabaan Sur - 1113010'>Tabaan Sur - 1113010</option>"+
                              "<option value = 'Tadiangan - 1113011'>Tadiangan - 1113011</option>"+
                              "<option value = 'Taloy Norte - 1113012'>Taloy Norte - 1113012</option>"+
                              "<option value = 'Taloy Sur - 1113013'>Taloy Sur - 1113013</option>"+
                              "<option value = 'Twin Peaks - 1113014'>Twin Peaks - 1113014</option>"
            
            break;

          case "Tublay - 1114000":
            select.innerHTML="<option value = 'Ambassador - 1114001'>Ambassador - 1114001</option>"+
                              "<option value = 'Ambongdolan - 1114002'>Ambongdolan - 1114002</option>"+
                              "<option value = 'Ba-ayan - 1114003'>Ba-ayan - 1114003</option>"+
                              "<option value = 'Basil - 1114004'>Basil - 1114004</option>"+
                              "<option value = 'Caponga(Pob.) - 1114006'>Caponga(Pob.) - 1114006</option>"+
                              "<option value = 'Daclan - 1114005'>Daclan - 1114005</option>"+
                              "<option value = 'Tublay Central - 1114007'>Tublay Central - 1114007</option>"+
                              "<option value = 'Tuel - 1114008'>Tuel - 1114008</option>"

            break;
        }
  }