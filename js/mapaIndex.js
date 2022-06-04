//active nav
var element = document.getElementById('inicio');

resetnav();
element.classList.add("active");
var aux_id = [];
var array_info = new Array();
$(document).ready(function () {
  $.ajax({
    url: 'Tareas/ajaxInicio.php',
    type: 'GET',
    async: true,
    data: {
      actionid: 1
    },
    success: function (resultado) {

      console.log(resultado);
      for (i in resultado.ConteoUni) {
        aux_id.push(resultado.ConteoUni[i].ID);
        // [0] es el total de univesidades [1] es el id de las universidades y [2] es la ruta del escudo
        array_info.push([resultado.ConteoUni[i].CM, resultado.ConteoUni[i].ID, resultado.ConteoUni[i].Ruta_Escudo]);
      }
      console.log("array info 1:" + array_info[1][2]);

      console.log("array info 2:" + array_info[0]);

      //mapa
      var map = L.map('map').setView([19.582987, -89.285692], 7);
      map.doubleClickZoom.disable();
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        {
          minZoom: 7,
          maxZoom: 8,
          noWrap:true,
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> ',

        }).addTo(map);
      //listado de municipios
      var ListadoGeo =
      {
        "type": "FeatureCollection", "features": [{ "id": "d6c1cf91-feb9-4bf4-91b5-e8d84851cb98", "properties": { "Ruta": "", "Clave": "9", "Nombre": "Tulum" }, "type": "Feature", "geometry": { "type": "Polygon", "coordinates": [[[-87.3036048, 20.41057701], [-87.3108713, 20.4136997], [-87.31206733, 20.41173757], [-87.32174069, 20.41668409], [-87.32955711, 20.41227615], [-87.34827186, 20.44203211], [-87.35732019, 20.44848257], [-87.36368949, 20.43834963], [-87.38164118, 20.44670863], [-87.40809725, 20.40448124], [-87.36478275, 20.38147489], [-87.37796179, 20.35677695], [-87.44859012, 20.39409467], [-87.52537072, 20.37407641], [-87.58111985, 20.44180648], [-87.58928402, 20.4690463], [-87.6356968, 20.51586608], [-87.76877758, 20.51592045], [-87.77047205, 20.51608543], [-87.84661184, 20.44124812], [-87.87886012, 20.44471186], [-87.96271896, 20.44676827], [-87.99507149, 20.44729291], [-87.99296682, 20.42404947], [-87.97352599, 20.20950869], [-87.62799551, 20.20651984], [-87.62792242, 20.13472903], [-87.49999325, 20.1345025], [-87.499901, 19.80713375], [-87.47665613, 19.77283824], [-87.4651737, 19.77825846], [-87.46923929, 19.79644279], [-87.46743173, 19.81873225], [-87.44213256, 19.83430889], [-87.42078154, 19.88889108], [-87.43340343, 19.94569865], [-87.45887366, 19.99526471], [-87.46105858, 20.12360174], [-87.42851602, 20.2030779], [-87.37254387, 20.26718521], [-87.3172747, 20.37066779], [-87.30167138, 20.40958446], [-87.3036048, 20.41057701]]] } }, { "id": "ac574b7f-6003-4d17-9627-f41c73ed1731", "properties": { "Clave": "8", "Nombre": "Solidaridad" }, "type": "Feature", "geometry": { "type": "Polygon", "coordinates": [[[-86.91540453, 20.81046803], [-86.91784842, 20.80833308], [-86.94531687, 20.76702074], [-86.96270765, 20.74525523], [-86.96216102, 20.72851125], [-87.00164526, 20.70412455], [-87.014568, 20.69328099], [-87.02032353, 20.67335115], [-87.046702, 20.6472086], [-87.06092828, 20.63238983], [-87.07289924, 20.61993132], [-87.10315026, 20.58723276], [-87.11752916, 20.57787609], [-87.12176368, 20.57568566], [-87.12418062, 20.57743358], [-87.12572319, 20.57688107], [-87.13242088, 20.58370097], [-87.13579783, 20.58617433], [-87.16613923, 20.59356251], [-87.177354, 20.59678847], [-87.18138965, 20.59769573], [-87.19001925, 20.58464522], [-87.15686615, 20.57002354], [-87.1407558, 20.58231278], [-87.13047611, 20.57046049], [-87.1284527, 20.56909893], [-87.12964328, 20.56693754], [-87.15777842, 20.54249728], [-87.19269856, 20.51831669], [-87.24585283, 20.47783348], [-87.26708871, 20.45592935], [-87.29772312, 20.4150979], [-87.30174756, 20.41116894], [-87.30221703, 20.41082279], [-87.30355676, 20.4109454], [-87.3036048, 20.41057701], [-87.3108713, 20.4136997], [-87.31206733, 20.41173757], [-87.32174069, 20.41668409], [-87.32955711, 20.41227615], [-87.34827186, 20.44203211], [-87.35732019, 20.44848257], [-87.36368949, 20.43834963], [-87.38164118, 20.44670863], [-87.40809725, 20.40448124], [-87.36478275, 20.38147489], [-87.37796179, 20.35677695], [-87.44859012, 20.39409467], [-87.52537072, 20.37407641], [-87.58111985, 20.44180648], [-87.58928402, 20.4690463], [-87.6356968, 20.51586608], [-87.76877758, 20.51592045], [-87.77047205, 20.51608543], [-87.84661184, 20.44124812], [-87.87886012, 20.44471186], [-87.96271896, 20.44676827], [-87.74418597, 20.65377019], [-87.61136306, 20.65400945], [-87.61339419, 20.59972817], [-87.52210557, 20.59253435], [-87.52400757, 20.66041662], [-87.37879163, 20.6584838], [-87.40339798, 20.72736382], [-87.35106573, 20.72405036], [-87.35591097, 20.70569824], [-87.30227736, 20.70633448], [-87.30236625, 20.74655592], [-87.32005188, 20.74671413], [-87.23583412, 20.75951888], [-87.23599749, 20.76545287], [-87.19695214, 20.76592458], [-87.13762331, 20.72833549], [-87.1230289, 20.74607982], [-87.11616182, 20.75282344], [-87.11114081, 20.75871203], [-87.1017987, 20.75375851], [-87.09670254, 20.7595751], [-87.09279187, 20.76560742], [-87.095226, 20.76556287], [-87.09524224, 20.76975198], [-87.11784387, 20.76926646], [-87.11783368, 20.76007323], [-87.12279574, 20.76018071], [-87.12260035, 20.77813715], [-87.11778532, 20.77847565], [-87.11783956, 20.78783642], [-87.10894702, 20.78802868], [-87.10893553, 20.79661998], [-87.09904699, 20.79701053], [-87.09889796, 20.80610992], [-87.09433483, 20.80608619], [-87.09403461, 20.7970362], [-87.0892826, 20.79736631], [-87.08944457, 20.80619899], [-87.08011819, 20.8066049], [-87.07964209, 20.81146814], [-86.92083228, 20.81209151], [-86.91868132, 20.81064758], [-86.91540453, 20.81046803]]] } }, { "id": "7301c8dc-8f7d-47e3-b97d-8e5ccb615e54", "properties": { "Ruta": "", "Clave": "1", "Nombre": "Cozumel" }, "type": "Feature", "geometry": { "type": "Polygon", "coordinates": [[[-86.99006778, 20.26769749], [-87.01971258, 20.29845113], [-87.02971781, 20.37553836], [-87.00920967, 20.43782133], [-86.92997356, 20.55478972], [-86.89691841, 20.5678197], [-86.85947762, 20.55110477], [-86.79948821, 20.560622], [-86.74351774, 20.58319642], [-86.72547753, 20.5959987], [-86.71754443, 20.5879794], [-86.73597916, 20.54747952], [-86.78631002, 20.46579268], [-86.81606817, 20.43547123], [-86.83027933, 20.43165455], [-86.89569554, 20.34252935], [-86.94444501, 20.29688573], [-86.99006778, 20.26769749]]] } }, { "id": "ff61b499-75fa-4e2e-bb5d-53073b0ab507", "properties": { "Ruta": "", "Clave": "3", "Nombre": "Isla Mujeres" }, "type": "Feature", "geometry": { "type": "Polygon", "coordinates": [[[-87.22063073, 21.41977396], [-87.22265155, 21.42556578], [-87.2233311, 21.43120408], [-87.22761919, 21.44856108], [-87.11136467, 21.59403314], [-87.11889655, 21.5967771], [-87.10689833, 21.60862639], [-87.09252097, 21.60901987], [-86.99316063, 21.57743161], [-86.79601786, 21.52874025], [-86.77474083, 21.45574671], [-86.78095163, 21.38336568], [-86.74390872, 21.2687593], [-86.70516103, 21.19783888], [-86.80185014, 21.21195432], [-86.83918014, 21.21196618], [-86.83960978, 21.21304692], [-86.84302623, 21.21149106], [-86.84294159, 21.21101021], [-86.84696171, 21.21040242], [-86.84806123, 21.21200037], [-86.8660119, 21.21206077], [-86.8650952, 21.21008067], [-86.9145133, 21.21007891], [-86.91452793, 21.2120143], [-86.97806029, 21.21199735], [-86.97812646, 21.2170931], [-86.99747744, 21.21715207], [-86.99751996, 21.21206673], [-87.10170742, 21.21201005], [-87.10093534, 21.23007708], [-87.09972685, 21.36197977], [-87.12623127, 21.36379889], [-87.12753128, 21.42166045], [-87.1859358, 21.42339338], [-87.19916551, 21.41710764], [-87.22063073, 21.41977396]]] } }, {
          "id": "3b82a10b-8f60-41f7-8fc8-17b293af9f29", "properties": { "Clave": "2", "Nombre": "Felipe Carrillo Puerto" }, "type": "Feature", "geometry": {
            "type": "Polygon", "coordinates": [[[-87.499901, 19.80713375], [-87.49999325, 20.1345025], [-87.62792242, 20.13472903], [-87.62799551, 20.20651984], [-87.97352599, 20.20950869], [-87.99296682, 20.42404947], [-87.9929911, 20.41793229], [-88.03403099, 20.37893922], [-88.04754452, 20.37882416], [-88.04726198, 20.36633804], [-88.06493334, 20.34953683], [-88.13637938, 20.2813756], [-88.16714512, 20.28542733], [-88.2327512, 20.28696319], [-88.23269079, 20.29020263], [-88.26464453, 20.29033948], [-88.2668421, 20.26913062], [-88.27296361, 20.26993174], [-88.30876186, 20.25349713], [-88.35195959, 20.25900148], [-88.35657726, 20.25828173], [-88.37087758, 20.25782872], [-88.37661155, 20.25699875], [-88.39528291, 20.2535528], [-88.40096743, 20.25176913], [-88.40730137, 20.25211321], [-88.40916607, 20.25210725], [-88.40519306, 20.24615976], [-88.40288764, 20.23949103], [-88.40911284, 20.23972973], [-88.41512354, 20.23296555], [-88.44343189, 20.23815007], [-88.51992621, 20.19232659], [-88.50234362, 20.19008326], [-88.44709515, 20.18200287], [-88.43614443, 20.17007562], [-88.42253721, 20.15410093], [-88.4368602, 20.05234996], [-88.49712196, 20.05862996], [-88.49826684, 20.03821425], [-88.48856469, 20.03657897], [-88.47914713, 20.03666376], [-88.47529622, 20.03767151], [-88.47420791, 20.02480723], [-88.47561672, 20.01835217], [-88.48338423, 20.0197139], [-88.48415861, 20.00987921], [-88.44316702, 20.00680021], [-88.44061106, 20.02260357], [-88.39141746, 20.0161536], [-88.39198666, 20.00555577], [-88.39157417, 19.99747098], [-88.39254624, 19.97673116], [-88.3959034, 19.97629502], [-88.39516102, 19.97024277], [-88.39287226, 19.97050399], [-88.39345258, 19.95766301], [-88.39710393, 19.95767189], [-88.39701241, 19.95132532], [-88.41030137, 19.9509319], [-88.41034929, 19.9573039], [-88.46846948, 19.9569629], [-88.46842431, 19.89138616], [-88.48404719, 19.89171802], [-88.4835615, 19.88363148], [-88.48683585, 19.88029924], [-88.51154074, 19.78737729], [-88.51189431, 19.78656675], [-88.51194679, 19.78587317], [-88.5115766, 19.78511776], [-88.51158262, 19.78456398], [-88.5119577, 19.78401036], [-88.51224019, 19.78307242], [-88.51296532, 19.78258587], [-88.52287017, 19.75726639], [-88.52339705, 19.75685623], [-88.52391698, 19.75502994], [-88.52844066, 19.74536022], [-88.54845728, 19.7491096], [-88.54885543, 19.74927809], [-88.57585578, 19.63822671], [-88.59837416, 19.64330469], [-88.59066982, 19.63408554], [-88.62323491, 19.64088441], [-88.62519052, 19.64209696], [-88.63082557, 19.64267258], [-88.63314773, 19.6433835], [-88.63951184, 19.63716979], [-88.63838132, 19.63514819], [-88.65324214, 19.62860246], [-88.65160465, 19.62534943], [-88.63162171, 19.59917615], [-88.63113043, 19.59814931], [-88.63064365, 19.5974924], [-88.61861466, 19.59632498], [-88.62098756, 19.52402212], [-88.62272441, 19.44867338], [-88.64528327, 19.45132792], [-88.64524541, 19.4571518], [-88.69263257, 19.46209015], [-88.69465268, 19.44360726], [-88.68972873, 19.44389702], [-88.68947455, 19.43752435], [-88.69566305, 19.43725075], [-88.69938861, 19.40383909], [-88.69411799, 19.40183129], [-88.67468849, 19.40320746], [-88.6745603, 19.39519456], [-88.66888329, 19.39475002], [-88.67524219, 19.3385555], [-88.6594625, 19.33835295], [-88.66047592, 19.30438959], [-88.6359098, 19.3029733], [-88.63602935, 19.28190597], [-88.64938724, 19.28197046], [-88.64942013, 19.28008539], [-88.71393992, 19.28089631], [-88.71764206, 19.24644121], [-88.71739792, 19.24639595], [-88.71742746, 19.23106375], [-88.71748568, 19.21820575], [-88.66985896, 19.21750656], [-88.59840286, 19.21823977], [-88.59005486, 19.21243153], [-88.58987216, 19.18951713], [-88.55525067, 19.18951785], [-88.5555021, 19.20167968], [-88.53780452, 19.20151371], [-88.53067666, 19.2010659], [-88.48483723, 19.20247564], [-88.48255438, 19.19588172], [-88.47376971, 19.19387488], [-88.4516973, 19.19523241], [-88.41455672, 19.19813915], [-88.38524753, 19.19817476], [-88.39895022, 19.17274594], [-88.40711284, 19.14706437], [-88.42358142, 19.09676784], [-88.38769462, 19.09401351], [-88.32721038, 19.07661361], [-88.24241982, 19.05178142], [-88.22779816, 19.09165482], [-88.22778872, 19.09238929],
            [-88.22452564, 19.10116067], [-88.22002932, 19.10717244], [-88.21965952, 19.11381239], [-88.2207623, 19.11572935], [-88.21610825, 19.13077267], [-88.20844496, 19.15659877], [-88.19334979, 19.15329288], [-88.17299581, 19.150187], [-88.17419804, 19.14092342], [-88.17302231, 19.14085117], [-88.17296107, 19.14031235], [-88.16950336, 19.14031536], [-88.16811468, 19.1423937], [-88.14468046, 19.1403466], [-88.14451281, 19.14117613], [-88.13798029, 19.13903168], [-88.07834807, 19.12620314], [-88.03654207, 19.1189662], [-88.01697975, 19.1166223], [-87.54997186, 19.11860877], [-87.53814436, 19.15306561], [-87.53555801, 19.19726722], [-87.44312851, 19.30954602], [-87.42377562, 19.4970374], [-87.40474114, 19.5984013], [-87.42858252, 19.63783046], [-87.45734789, 19.70672359], [-87.499901, 19.80713375]]]
          }
        }, { "id": "96a116f4-00ea-4137-ae38-f77b551dc109", "properties": { "Ruta": "", "Clave": "7", "Nombre": "L&aacute;zaro C&aacute;rdenas" }, "type": "Feature", "geometry": { "type": "Polygon", "coordinates": [[[-87.10093534, 21.23007708], [-87.15475539, 21.23178381], [-87.1537025, 21.18611328], [-87.19320792, 21.18934353], [-87.19245436, 21.13999163], [-87.20665283, 21.14056326], [-87.21294398, 21.09954987], [-87.3204953, 21.10110799], [-87.32348382, 20.87203478], [-87.16777551, 20.87092603], [-87.16577931, 20.82071678], [-87.16771797, 20.76636183], [-87.19695214, 20.76592458], [-87.23599749, 20.76545287], [-87.23583412, 20.75951888], [-87.32005188, 20.74671413], [-87.30236625, 20.74655592], [-87.30227736, 20.70633448], [-87.35591097, 20.70569824], [-87.35106573, 20.72405036], [-87.40339798, 20.72736382], [-87.37879163, 20.6584838], [-87.52400757, 20.66041662], [-87.52210557, 20.59253435], [-87.61339419, 20.59972817], [-87.61136306, 20.65400945], [-87.74418597, 20.65377019], [-87.57824492, 20.92638274], [-87.53299166, 20.99928651], [-87.53502593, 21.4903648], [-87.49767715, 21.48558605], [-87.49358627, 21.48589433], [-87.48852876, 21.48532373], [-87.48594675, 21.48366072], [-87.3991029, 21.51561051], [-87.36420904, 21.53901128], [-87.33375854, 21.5705813], [-87.11889655, 21.5967771], [-87.11713846, 21.59708791], [-87.11136467, 21.59403314], [-87.22761919, 21.44856108], [-87.2233311, 21.43120408], [-87.22265155, 21.42556578], [-87.22063073, 21.41977396], [-87.19916551, 21.41710764], [-87.1859358, 21.42339338], [-87.12753128, 21.42166045], [-87.12623127, 21.36379889], [-87.09972685, 21.36197977], [-87.10093534, 21.23007708]]] } }, { "id": "2365abce-a3e7-4102-a911-76f56b4ae8bd", "properties": { "Clave": "6", "Nombre": "Jos&eacute; Mar&iacute;a Morelos" }, "type": "Feature", "geometry": { "type": "Polygon", "coordinates": [[[-88.71742746, 19.23106375], [-88.71739792, 19.24639595], [-88.71764206, 19.24644121], [-88.71393992, 19.28089631], [-88.64942013, 19.28008539], [-88.64938724, 19.28197046], [-88.63602935, 19.28190597], [-88.6359098, 19.3029733], [-88.66047592, 19.30438959], [-88.6594625, 19.33835295], [-88.67524219, 19.3385555], [-88.66888329, 19.39475002], [-88.6745603, 19.39519456], [-88.67468849, 19.40320746], [-88.69411799, 19.40183129], [-88.69938861, 19.40383909], [-88.69566305, 19.43725075], [-88.68947455, 19.43752435], [-88.68972873, 19.44389702], [-88.69465268, 19.44360726], [-88.69263257, 19.46209015], [-88.64524541, 19.4571518], [-88.64528327, 19.45132792], [-88.62272441, 19.44867338], [-88.61861466, 19.59632498], [-88.63064365, 19.5974924], [-88.63113043, 19.59814931], [-88.63162171, 19.59917615], [-88.65160465, 19.62534943], [-88.65324214, 19.62860246], [-88.63838132, 19.63514819], [-88.63951184, 19.63716979], [-88.63314773, 19.6433835], [-88.63082557, 19.64267258], [-88.62519052, 19.64209696], [-88.62323491, 19.64088441], [-88.59066982, 19.63408554], [-88.59837416, 19.64330469], [-88.57585578, 19.63822671], [-88.54885543, 19.74927809], [-88.52844066, 19.74536022], [-88.52391698, 19.75502994], [-88.52339705, 19.75685623], [-88.52287017, 19.75726639], [-88.51296532, 19.78258587], [-88.51224019, 19.78307242], [-88.5119577, 19.78401036], [-88.51158262, 19.78456398], [-88.5115766, 19.78511776], [-88.51194679, 19.78587317], [-88.51189431, 19.78656675], [-88.51154074, 19.78737729], [-88.48683585, 19.88029924], [-88.4835615, 19.88363148], [-88.48404719, 19.89171802], [-88.46842431, 19.89138616], [-88.46846948, 19.9569629], [-88.41034929, 19.9573039], [-88.41030137, 19.9509319], [-88.39701241, 19.95132532], [-88.39710393, 19.95767189], [-88.39345258, 19.95766301], [-88.39287226, 19.97050399], [-88.39516102, 19.97024277], [-88.3959034, 19.97629502], [-88.39254624, 19.97673116], [-88.39157417, 19.99747098], [-88.39198666, 20.00555577], [-88.39141746, 20.0161536], [-88.44061106, 20.02260357], [-88.44316702, 20.00680021], [-88.48415861, 20.00987921], [-88.48338423, 20.0197139], [-88.47561672, 20.01835217], [-88.47420791, 20.02480723], [-88.47529622, 20.03767151], [-88.47914713, 20.03666376], [-88.48856469, 20.03657897], [-88.49826684, 20.03821425], [-88.49712196, 20.05862996], [-88.4368602, 20.05234996], [-88.42253721, 20.15410093], [-88.43614443, 20.17007562], [-88.44709515, 20.18200287], [-88.50234362, 20.19008326], [-88.50761389, 20.143395], [-88.57665491, 20.14806173], [-88.57813578, 20.13922034], [-88.58767048, 20.14046323], [-88.58798563, 20.13145349], [-88.61269126, 20.13312561], [-88.61280032, 20.13427337], [-88.61641147, 20.13444727], [-88.62084916, 20.13182367], [-88.62086513, 20.13040631], [-88.61863218, 20.12778604], [-88.61919618, 20.117192], [-88.63990485, 20.12036511], [-88.69062269, 20.08983498], [-88.69079669, 20.07705199], [-88.68489079, 20.07738572], [-88.69179362, 20.02920036], [-88.694756, 20.03002396], [-88.7001682, 20.01038593], [-88.71251752, 20.01230097], [-88.71304578, 20.00915796], [-88.71843249, 20.01031272], [-88.72214869, 20.00511525], [-88.72377819, 20.00549646], [-88.72278061, 20.01319901], [-88.72676225, 20.01483522], [-88.73598826, 20.01756974], [-88.73581408, 20.0159928], [-88.73419011, 20.01527424], [-88.73314777, 20.01442278], [-88.73235412, 20.01406776], [-88.73624652, 20.00965932], [-88.74262119, 20.0085753], [-88.74246748, 20.01507088], [-88.75777427, 20.01393078], [-88.75769865, 20.01218876], [-88.77147026, 20.01346208], [-88.7711742, 20.00766695], [-88.78350356, 20.00817673], [-88.78441305, 19.99523227], [-88.78921111, 19.99557217], [-88.79048123, 19.99214029], [-88.79077328, 19.97200441], [-88.79803273, 19.97492443], [-88.79876527, 19.97051353], [-88.79838851, 19.95252261], [-88.80564779, 19.95382906], [-88.80604062, 19.94454661], [-88.81019594, 19.944965], [-88.81143007, 19.93525035], [-88.80889589, 19.93412593], [-88.80986106, 19.92695748], [-88.80974212, 19.92595828], [-88.81259004, 19.92555675], [-88.81333807, 19.91827177], [-88.81614649, 19.91549462], [-88.81650458, 19.90447094], [-88.81716674, 19.90494059], [-88.81787944, 19.90407063], [-88.82016677, 19.90555262], [-88.82274077, 19.90414036], [-88.82442734, 19.9047609], [-88.82315288, 19.90814647], [-88.8272808, 19.91091681], [-88.82750879, 19.91061033], [-88.82728282, 19.91047875], [-88.82943121, 19.90601004], [-88.82736656, 19.90449508], [-88.82844781, 19.90221916], [-88.82983635, 19.89856226], [-88.82040341, 19.89046641], [-88.82592965, 19.87992307], [-88.8321412, 19.88160698], [-88.83303992, 19.87822395], [-88.83992377, 19.87820824], [-88.85415906, 19.87847781], [-88.85691331, 19.87847235], [-88.86263575, 19.87844209], [-88.86638372, 19.87801377], [-88.87013266, 19.87825903], [-88.88021432, 19.87813094], [-88.87950459, 19.87000932], [-88.8791223, 19.86239818], [-88.89057344, 19.86096156], [-88.89040724, 19.85855584], [-88.90048115, 19.86109994], [-88.8988094, 19.85152329], [-88.89760127, 19.83684399], [-88.89974322, 19.83331725], [-88.90254092, 19.83215329], [-88.90349147, 19.83104016], [-88.90505456, 19.82671992], [-88.90821618, 19.82065238], [-88.90971471, 19.81358244], [-88.91051871, 19.80728349], [-88.91110353, 19.80093358], [-88.92030822, 19.8039824], [-88.9295206, 19.79096852], [-88.94543494, 19.79193691], [-88.9438516, 19.81344578], [-88.95807534, 19.81046146], [-88.95638471, 19.81681749], [-88.95905107, 19.81692866], [-88.96465604, 19.81752994], [-88.97445391, 19.81810165], [-88.97610816, 19.81075873], [-88.98443773, 19.80521589], [-88.98475889, 19.79983478], [-88.98440636, 19.79814981], [-88.99947049, 19.79800882], [-89.00409128, 19.77201004], [-89.02517812, 19.77672325], [-89.04881039, 19.72152746], [-89.0168876, 19.72632238], [-89.01536417, 19.72291013], [-88.99749236, 19.72678776], [-88.99660583, 19.72677419], [-88.99478291, 19.72741842], [-88.99753715, 19.70489981], [-89.03053394, 19.70887662], [-89.03620245, 19.67802587], [-89.07598192, 19.68543203], [-89.07419648, 19.6942293], [-89.123425, 19.70336522], [-89.13366764, 19.61460196], [-89.10841102, 19.61229212], [-89.10902032, 19.58236247], [-89.14958772, 19.58124164], [-89.14488035, 19.63741794], [-89.18926655, 19.64397037], [-89.1902918, 19.63326156], [-89.2228188, 19.63672702], [-89.21960827, 19.60797892], [-89.29650254, 19.55118483], [-89.14675287, 19.4237534], [-89.14700633, 19.22658389], [-88.71742746, 19.23106375]]] } }, {
          "id": "b1cdea0b-170a-4d34-9ff5-99e40e599b1e", "properties": { "Clave": "10", "Nombre": "Bacalar" }, "type": "Feature", "geometry": {
            "type": "Polygon", "coordinates": [[[-87.54997186, 19.11860877], [-88.01697975, 19.1166223], [-88.03654207, 19.1189662], [-88.07834807, 19.12620314], [-88.13798029, 19.13903168], [-88.14451281, 19.14117613], [-88.14468046, 19.1403466], [-88.16811468, 19.1423937], [-88.16950336, 19.14031536], [-88.17296107, 19.14031235], [-88.17302231, 19.14085117], [-88.17419804, 19.14092342], [-88.17299581, 19.150187], [-88.19334979, 19.15329288], [-88.20844496, 19.15659877], [-88.2207623, 19.11572935], [-88.21965952, 19.11381239], [-88.22002932, 19.10717244], [-88.22452564, 19.10116067], [-88.22778872, 19.09238929], [-88.22779816, 19.09165482], [-88.24241982, 19.05178142], [-88.38769462, 19.09401351], [-88.42358142, 19.09676784], [-88.39895022, 19.17274594], [-88.38524753, 19.19817476], [-88.41455672, 19.19813915], [-88.4516973, 19.19523241], [-88.47376971, 19.19387488], [-88.48255438, 19.19588172], [-88.48483723, 19.20247564], [-88.53067666, 19.2010659], [-88.53780452, 19.20151371], [-88.5555021, 19.20167968], [-88.55525067, 19.18951785], [-88.58987216, 19.18951713], [-88.59005486, 19.21243153], [-88.59840286, 19.21823977], [-88.66985896, 19.21750656], [-88.71748568, 19.21820575], [-88.71742746, 19.23106375], [-89.14700633, 19.22658389], [-89.14702155, 19.13321652], [-89.13581162, 19.13237387], [-89.14712789, 18.9950291], [-89.14860548, 18.87730613], [-89.06625946, 18.88755205], [-89.061797, 18.85739048], [-89.00653997, 18.86524934], [-89.00667899, 18.81685129], [-88.96504124, 18.81674763], [-88.96483402, 18.8144336], [-88.96618468, 18.79756165], [-88.9236931, 18.79561356],
            [-88.92298504, 18.81863065], [-88.82679145, 18.81988726], [-88.82494163, 18.759238], [-88.75372938, 18.75954679], [-88.75338308, 18.71212455], [-88.75321551, 18.62609929], [-88.58711248, 18.62742905], [-88.58534621, 18.65814008], [-88.5604099, 18.64903563], [-88.41380893, 18.62771187], [-88.41150887, 18.64269282], [-88.41110779, 18.64301432], [-88.40635022, 18.64303102], [-88.40009698, 18.65289574], [-88.39178226, 18.65820226], [-88.38013024, 18.68047997], [-88.38058072, 18.69614797], [-88.37306903, 18.70993563], [-88.34162017, 18.72490284], [-88.3065147, 18.75666547], [-88.30672644, 18.76650909], [-88.3019311, 18.77871717], [-88.29596859, 18.78599285], [-88.28244123, 18.79627817], [-88.27569791, 18.79922742], [-88.25450274, 18.84234474], [-88.22939296, 18.87499115], [-88.22160168, 18.8763287], [-88.20726443, 18.86826957], [-88.19060722, 18.86489283], [-88.18347393, 18.87276488], [-88.17102192, 18.90018671], [-88.16115139, 18.90120978], [-88.14404179, 18.90021669], [-88.13888758, 18.92757764], [-88.13528738, 18.92847829], [-88.08490655, 18.9277757], [-88.08515529, 18.95295108], [-88.0873086, 18.9770937], [-88.08247211, 18.97783823], [-88.06440386, 18.97698955], [-88.06390599, 18.98047044], [-88.06249049, 18.98045823], [-88.06164523, 18.98035378], [-88.06157958, 18.97713133], [-88.04872127, 18.98048091], [-87.64828842, 18.97645264], [-87.617829, 18.96257152], [-87.61424487, 18.96252737], [-87.60981483, 18.96287911], [-87.57313472, 19.03047625], [-87.54381989, 19.08857217], [-87.54997186, 19.11860877]]]
          }
        }, { "id": "8bc3f32c-110d-4954-8ed1-d710c90d1f33", "properties": { "Clave": "4", "Nombre": "Oth&oacute;n P. Blanco" }, "type": "Feature", "geometry": { "type": "Polygon", "coordinates": [[[-87.60981483, 18.96287911], [-87.61424487, 18.96252737], [-87.617829, 18.96257152], [-87.64828842, 18.97645264], [-88.04872127, 18.98048091], [-88.06157958, 18.97713133], [-88.06164523, 18.98035378], [-88.06249049, 18.98045823], [-88.06390599, 18.98047044], [-88.06440386, 18.97698955], [-88.08247211, 18.97783823], [-88.0873086, 18.9770937], [-88.08515529, 18.95295108], [-88.08490655, 18.9277757], [-88.13528738, 18.92847829], [-88.13888758, 18.92757764], [-88.14404179, 18.90021669], [-88.16115139, 18.90120978], [-88.17102192, 18.90018671], [-88.18347393, 18.87276488], [-88.19060722, 18.86489283], [-88.20726443, 18.86826957], [-88.22160168, 18.8763287], [-88.22939296, 18.87499115], [-88.25450274, 18.84234474], [-88.27569791, 18.79922742], [-88.28244123, 18.79627817], [-88.29596859, 18.78599285], [-88.3019311, 18.77871717], [-88.30672644, 18.76650909], [-88.3065147, 18.75666547], [-88.34162017, 18.72490284], [-88.37306903, 18.70993563], [-88.38058072, 18.69614797], [-88.38013024, 18.68047997], [-88.39178226, 18.65820226], [-88.40009698, 18.65289574], [-88.40635022, 18.64303102], [-88.41111377, 18.64299655], [-88.41150887, 18.64269282], [-88.41380893, 18.62771187], [-88.5604099, 18.64903563], [-88.58534621, 18.65814008], [-88.58711248, 18.62742905], [-88.75321551, 18.62609929], [-88.75338308, 18.71212455], [-88.75372938, 18.75954679], [-88.82494163, 18.759238], [-88.82679145, 18.81988726], [-88.92298504, 18.81863065], [-88.9236931, 18.79561356], [-88.96618468, 18.79756165], [-88.96483402, 18.8144336], [-88.96504124, 18.81674763], [-89.00667899, 18.81685129], [-89.00653997, 18.86524934], [-89.061797, 18.85739048], [-89.06625946, 18.88755205], [-89.14860548, 18.87730613], [-89.14432526, 18.75593949], [-89.15574308, 18.7530974], [-89.15211764, 18.73565782], [-89.15119078, 18.72387809], [-89.15023732, 18.45103863], [-89.1255546, 18.45058549], [-89.12152531, 18.3854621], [-89.13857515, 18.38549402], [-89.13226388, 18.29365389], [-89.15183019, 18.2929375], [-89.15785685, 18.22205052], [-89.14304748, 18.2243795], [-89.14379039, 18.14591611], [-89.20008428, 18.14518696], [-89.2016371, 18.08537777], [-89.14436922, 18.08187022], [-89.14495968, 18.05850587], [-89.16323642, 18.05790517], [-89.16365227, 18.01867863], [-89.2083918, 18.01978852], [-89.20659973, 17.95374865], [-89.1539108, 17.95291811], [-89.15197256, 17.93946212], [-89.13726062, 17.95432513], [-89.11365905, 17.96607593], [-89.05483181, 17.98610158], [-89.01622017, 17.98836219], [-88.98785121, 17.94402547], [-88.944523, 17.95041618], [-88.92582355, 17.913749], [-88.87790338, 17.89324909], [-88.85941812, 17.89336906], [-88.85286282, 17.90793326], [-88.84401495, 17.93740497], [-88.81547444, 17.94836887], [-88.78419687, 17.97857035], [-88.76842777, 18.00723725], [-88.71640051, 18.06031025], [-88.67910697, 18.1602334], [-88.63084522, 18.21301468], [-88.61553199, 18.22283641], [-88.60321975, 18.24142795], [-88.54059635, 18.36035462], [-88.51195445, 18.4536914], [-88.47200087, 18.48547639], [-88.44894314, 18.46710445], [-88.40992154, 18.48978149], [-88.39631592, 18.48702196], [-88.38337847, 18.47642626], [-88.37264219, 18.47816461], [-88.3674578, 18.48293689], [-88.35351249, 18.48242884], [-88.32658475, 18.48817042], [-88.31579801, 18.48577499], [-88.28898498, 18.47528146], [-88.25043196, 18.47271074], [-88.24978873, 18.41483687], [-88.03185737, 18.41255346], [-88.02925983, 18.17151407], [-87.93327111, 18.16759712], [-87.91893151, 18.15044397], [-87.90659087, 18.15162358], [-87.8789702, 18.18028019], [-87.86969226, 18.19681296], [-87.86371145, 18.19776564], [-87.86137221, 18.19070492], [-87.86017567, 18.18996779], [-87.85974122, 18.18915287], [-87.8599699, 18.18849298], [-87.85959889, 18.18804202], [-87.85946214, 18.18724958], [-87.85898439, 18.18675606], [-87.85886862, 18.18617385], [-87.85799632, 18.18543489], [-87.85746769, 18.18519009], [-87.85743163, 18.18475031], [-87.85762643, 18.18437109], [-87.85713239, 18.18414914], [-87.85734315, 18.18322481], [-87.85682, 18.18261892], [-87.85510173, 18.1834579], [-87.8498375, 18.18466854], [-87.84837293, 18.18593959], [-87.84664552, 18.1863136], [-87.84362314, 18.18867308], [-87.75425091, 18.39667639], [-87.60981483, 18.96287911]]] } }, { "id": "13991483-4eca-4c92-8bf2-6b56fd442c24", "properties": { "Clave": "11", "Nombre": "Puerto Morelos" }, "type": "Feature", "geometry": { "type": "Polygon", "coordinates": [[[-86.91540453, 20.81046803], [-86.91868132, 20.81064758], [-86.92083228, 20.81209151], [-87.07964209, 20.81146814], [-87.08011819, 20.8066049], [-87.08944457, 20.80619899], [-87.0892826, 20.79736631], [-87.09403461, 20.7970362], [-87.09433483, 20.80608619], [-87.09889796, 20.80610992], [-87.09904699, 20.79701053], [-87.10893553, 20.79661998], [-87.10894702, 20.78802868], [-87.11783956, 20.78783642], [-87.11778532, 20.77847565], [-87.12260035, 20.77813715], [-87.12279574, 20.76018071], [-87.11783368, 20.76007323], [-87.11784387, 20.76926646], [-87.09524224, 20.76975198], [-87.095226, 20.76556287], [-87.09279187, 20.76560742], [-87.1017987, 20.75375851], [-87.11114081, 20.75871203], [-87.11620261, 20.75278339], [-87.1230289, 20.74607982], [-87.13762331, 20.72833549], [-87.19695214, 20.76592458], [-87.16771797, 20.76636183], [-87.16577931, 20.82071678], [-87.16777551, 20.87092603], [-87.32348382, 20.87203478], [-87.3204953, 21.10110799], [-87.21294398, 21.09954987], [-87.21339499, 21.03761551], [-87.03802624, 21.11517996], [-86.90411568, 21.03194839], [-86.90600029, 21.01455836], [-87.05636088, 21.00821858], [-87.06920919, 20.96905902], [-87.14054855, 20.97190235], [-87.14345985, 20.92308222], [-86.91060442, 20.89832409], [-86.87371417, 20.89161751], [-86.87280159, 20.86047039], [-86.8705675, 20.8596806], [-86.86819021, 20.85056972], [-86.88763472, 20.8275724], [-86.90442486, 20.81108144], [-86.9121452, 20.81013463], [-86.91540453, 20.81046803]]] } }, { "id": "062cb8f6-c2df-4e08-a82c-59fc60f9d311", "properties": { "Clave": "5", "Nombre": "Benito Ju&aacute;rez" }, "type": "Feature", "geometry": { "type": "Polygon", "coordinates": [[[-86.8705675, 20.8596806], [-86.87280159, 20.86047039], [-86.87371417, 20.89161751], [-86.91060442, 20.89832409], [-87.14345985, 20.92308222], [-87.14054855, 20.97190235], [-87.06920919, 20.96905902], [-87.05636088, 21.00821858], [-86.90600029, 21.01455836], [-86.90411568, 21.03194839], [-87.03802624, 21.11517996], [-87.21339499, 21.03761551], [-87.21294398, 21.09954987], [-87.20665283, 21.14056326], [-87.19245436, 21.13999163], [-87.19320792, 21.18934353], [-87.1537025, 21.18611328], [-87.15475539, 21.23178381], [-87.10093534, 21.23007708], [-87.10170742, 21.21201005], [-86.99751996, 21.21206673], [-86.99747744, 21.21715207], [-86.97812646, 21.2170931], [-86.97806029, 21.21199735], [-86.91452793, 21.2120143], [-86.9145133, 21.21007891], [-86.8650952, 21.21008067], [-86.8660119, 21.21206077], [-86.84806123, 21.21200037], [-86.84696171, 21.21040242], [-86.84294159, 21.21101021], [-86.84302623, 21.21149106], [-86.83960978, 21.21304692], [-86.83918014, 21.21196618], [-86.80185014, 21.21195432], [-86.70516103, 21.19783888], [-86.77349579, 21.02650155], [-86.8705675, 20.8596806]]] } }]
      };

      var geoJsonA = L.geoJSON(ListadoGeo, {
        style: function (feature) {
          return {
            fillColor: 'var(--info)',
            weight: 2,
            opacity: 1,
            color: 'black',
            dashArray: '3',
            fillOpacity: 0.7,
            padding: 500
          }
        }
        ,
        onEachFeature: function (feature, layer) {
          if (aux_id.includes(layer.feature.properties.Clave)) {
            if (array_info[aux_id.indexOf(layer.feature.properties.Clave)][0] > 0) {

              console.log(layer.feature.properties.Nombre + "Numero de universidades :");


              var formatomunicipio = '<div class="">' +
                '<img class="card-img-top rounded mx-auto d-block" src="' + array_info[aux_id.indexOf(layer.feature.properties.Clave)][2] + '" alt="Escudo municipio"  style="width: 50px">' +
                '<div class="card-body text-center">' +
                '<b class="card-title">' + layer.feature.properties.Nombre + '</b>' +
                '<p class="card-text">Numero de universidades : ' + array_info[aux_id.indexOf(layer.feature.properties.Clave)][0] + '</p>' +
                '<a  href="Listado.php?municipio=' + array_info[aux_id.indexOf(layer.feature.properties.Clave)][1] + '" class="btn btn-outline-primary" target="_self">Ver universidades</a>' +
                '</div>' +
                '</div>';
            } else {
              var formatomunicipio = '<div class="">' +
                '<img class="card-img-top rounded mx-auto d-block" src="' + array_info[aux_id.indexOf(layer.feature.properties.Clave)][2] + '" alt="Escudo municipio"  style="width: 50px">' +
                '<div class="card-body text-center">' +
                '<b class="card-title">' + layer.feature.properties.Nombre + '</b>' +
                '<p class="card-text">Numero de universidades :0 </p>' +
                '</div>' +
                '</div>';
            }
          } else {
            var formatomunicipio = '<div class="">' +
              '<div class="card-body text-center">' +
              '<b class="card-title">Municipio no asignado</b>' +
              '</div>' +
              '</div>';
          }
          // layer.bindPopup(layer.feature.properties.name);
          layer.bindPopup(formatomunicipio);
          layer.on('mouseover', function (e) {
            layer.setStyle({
              weight: 5,
              fillColor: 'var(--hover-listado)',
              dashArray: '',
              fillOpacity: 0.7
            });

          });
          layer.on('mouseout', function (e) {
            layer.setStyle({
              fillColor: 'var(--info)',
              weight: 2,
              opacity: 1,
              color: 'black',
              dashArray: '3',
              fillOpacity: 0.7
            });
          });
        }


      }).addTo(map);
     
     console.log(geoJsonA.getBounds(),{
      padding: [20,20]
    });
      map.setMaxBounds(geoJsonA.getBounds().pad(0.5)
        );
    },
    failure: function (error) {
      console.log(error);
    }
    
  });
});

