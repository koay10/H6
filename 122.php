<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 600px;
}
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/plugins/timeline.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4plugins_timeline.CurveChart);
chart.curveContainer.padding(0, 100, 0, 120);
chart.maskBullets = false;

var colorSet = new am4core.ColorSet();

chart.data = 
[
  {
    "category": "",
    "year": "1960",
    "size": 4,
    "text": "1960年成立台灣觀光協會",
    "desc":"我國觀光事業萌芽於1956年台灣省政府設立「台灣省觀光事業委員會」，\n並輔導民間成立的「台灣觀光協會」，為最早成立的官方及民間觀光組織。\n 為積極發展觀光，交通部於1960年成立「觀光事業小組」為觀光局建制之始，\n負責觀光事業法規、重要計畫，督導及宣傳觀光事業，並研訂完成「觀光事業四年計畫」。"
  }, 
  {
    "category": "",
    "year": "1963",
    "size": 4,
    "text": "1963年圓山大飯店完工",
    "desc":"1963年4月，第一個推廣台灣觀光的廣告在美國《紐約時報》刊登。\n1963年圓山大飯店完成飯店基礎設施；1967年獲美國財星雜誌評為世界十大飯店。"
  }, 
  {
    "category": "",
    "year": "1965",
    "size": 4,
    "text": "1965年國立故宮博物院成立",
    "desc":"1965年11月，國立故宮博物院台北外雙溪新館落成啟用，典藏65萬件無價中華藝術寶藏。之後於2001年籌建故宮南部院區，並於2015年開館營運。"
  }, 
  {
    "category": "",
    "year": "1966",
    "size": 4,
    "text": "1966年建制「交通部觀光事業小組」",
    "desc":"1966年10月，交通部「觀光事業小組」改組「觀光事業委員會」，為觀光局的前身。"
  }, {
    "category": "",
    "year": "1967",
    "size": 4,
    "text": "1967年兒童育樂中心開幕",
    "desc":"台北圓山市立兒童育樂中心開幕，為全台最早且唯一之公辦兒童樂園。同時，全台第一家民營遊樂園雲仙樂園開幕。"
  }, 
  {
    "category": "",
    "year": "1968",
    "size": 4,
    "text": "1968年首辦第17屆亞太旅行協會年會",
    "desc":"1968年2月，首度主辦第17屆亞太旅行協會（PATA）年會，創下台灣歷年國際性會議規模最大、參與人數最多紀錄。"
  }, 
  {
    "category": "",
    "year": "1969",
    "size": 4,
    "text": "1969年制定發展觀光條例",
    "desc":"1969年7月，制定「發展觀光條例」，確立觀光事業發展與管理的法源依據。\n二、1970年-1979年 紮根基礎期：設置觀光局及駐外辦事處，紮根厚實基底，觀光起飛，來台旅客首度破百萬。"
  }, 
  {
    "category": "",
    "year": "1970",
    "size": 4,
    "text": "1970年第一個駐外辦事處—舊金山辦事處成立",
    "desc":"1970年成立第一個駐外辦事處「舊金山辦事處」，之後陸續成立東京、法蘭克福等駐外辦事處。\n1970年交通部觀光事業委員會提出「台灣地區觀光事業綜合開發計畫」，核定台北市、日月潭、阿里山、恆春及墾丁等5處優先開發觀光目標區。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1971",
    "text": "1971年設置交通部觀光事業局",
    "desc":"1971年6月，交通部觀光事業委員會與台灣省觀光事業管理局合併改組為「交通部觀光事業局」。\n1972年12月29日公布「交通部觀光局組織條例」，1973年3月1日，「交通部觀光事業局」更名為「交通部觀光局」，\n綜理規劃、執行並管理全國觀光事業。1974年起，各縣市政府陸續增設觀光課。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1975",
    "text": "1975年興建風景區國民旅舍",
    "desc":"1975年11月，訂定「風景區國民旅舍暨遊樂設施輔導管理辦法」，出租公有土地並補助相關單位興建國民旅舍，計有台大實驗林溪頭國民旅舍、烏山頭國民旅舍、日月潭青年活動中心等最具代表。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1976",
    "text": "1976年國際旅客首度突破100萬人次",
    "desc":"1976年12月28日，來台旅客首度突破100萬人次。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1977",
    "text": "1977年訂定觀光旅館業管理規則",
    "desc":"1977年7月，訂定「觀光旅館業管理規則」，將觀光旅館區分為國際觀光旅館及一般觀光旅館。\n1977年10月，訂定每年的農曆正月15日元宵節為觀光節。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1978",
    "text": "1978年舉辦第一屆觀光節慶祝大會、高速公路全線正式通車",
    "desc":"1978年2月，舉辦第一屆觀光節慶祝大會。\n1978年10月，台灣十大建設之一高速公路全線正式通車。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1979",
    "text": "1979年桃園國際機場正式啟用",
    "desc":"1979年1月，開放國人出國觀光旅遊；\n1979年2月，中正國際機場第一航廈啟用（2006年更名為台灣桃園國際機場）。\n1979年7月，縱貫鐵路電氣化工程完工啟用，台北到高雄由8小時縮短為4小時，開創台灣鐵路史新頁。"
  },  
  {
    "category": "",
    "size": 4,
    "year": "1980",
    "text": "1980年北迴鐵路通車、啟用孔子周遊列國圖案局徽",
    "desc":"1980年2月，北迴鐵路通車，台灣東西部鐵路完成連結。\n1980年11月，啟用觀光局二代局徽，以代表國花的梅花及孔子周遊列國圖為設計主題，鼓勵民眾效法孔子周遊列國之雄心壯志。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1981",
    "text": "1981年設立觀光局旅遊服務中心",
    "desc":"1981年7月，觀光局於松山機場設立第一個以出國旅遊服務為目的之「旅遊服務中心」。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1982",
    "text": "1982年成立第一個國家風景特定區",
    "desc":"1982年2月，行政院公告核定台灣第一個國家風景特定區「東北角風景區」。\n1984年6月，「東北角海岸風景特定區管理處」成立(1995年7月更名為「東北角海岸國家風景區管理處」)，之後陸續成立共13處國家風景區。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1983",
    "text": "1983年實施觀光旅館梅花評鑑制度、日月潭萬人泳渡",
    "desc":"1983年實施觀光旅館梅花評鑑制度，核發2至5朵梅花等級標章。\n1983年9月，舉辦第一屆日月潭萬人泳渡活動；與中華民國露營協會合辦國際露營大會，並於1985年合辦亞太地區露營大會。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1987",
    "text": "1987年台北饒河街觀光夜市開幕、開放大陸探親、舉辦第一屆台北國際旅展(ITF)",
    "desc":"1987年5月，台北饒河街觀光夜市開幕；10月，擁有40年歷史的華西街夜市整建後再以觀光夜市之姿重新出發。各地夜市群起效尤，在地特色夜市也發展為台灣重要觀光資源。\n1987年7月，政府解除戒嚴；11月2日，開放國人赴大陸探親。\n1987年12月，舉辦第一屆「台北國際旅展（ITF）」，為全球旅遊業重要行銷平台。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1988",
    "text": "1988年1月全面開放旅行社執照申請，促進旅遊市場自由競爭。",
    "desc":""
  },  
  {
    "category": "",
    "size": 4,
    "year": "1990",
    "text": "1990年台北世貿中心啟用、舉辦第一屆台灣美食展、第一屆台灣燈會",
    "desc":"1990年1月，台北世貿中心啟用，連同展區、會議中心及飯店，建構成功能完整的會展建築群。\n1990年2月，舉辦第一屆「台北中華美食展」（2007年更名為台灣美食展）。\n1990年2月，舉辦第一屆「台北燈會」（2001年起改為全國各地巡迴舉辦，並更名為台灣燈會）。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1991",
    "text": "1991年南迴鐵路完工",
    "desc":"1991年12月，南迴鐵路完工通車，完成環島台灣鐵路網。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1992",
    "text": "1992年台灣地區觀光遊憩系統開發計畫",
    "desc":"完成中長程「台灣地區觀光遊憩系統開發計畫」，將台灣劃分為36個可互相串連遊憩系統，做為觀光遊憩發展及規劃建設之指導綱要。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1993",
    "text": "1993年全面開放觀光、成立金門國家公園",
    "desc":"1993年2月，全面開放觀光；1995年5月，金門國家公園成為第6座、也是首座的離島國家公園。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1994",
    "text": "1994年推動民間參與重大觀光遊憩設施",
    "desc":"1994年12月，「獎勵民間參與交通建設條例」公布施行，推動民間以BOO或BOT參與重大觀光遊憩設施。\n(1999年5月，觀光局成立「獎勵民間投資觀光遊憩設施推動小組」，並完成相關審核及作業要點。)"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1996",
    "text": "1996年台北捷運木柵線通車",
    "desc":"1996年3月，台灣第一條捷運台北木柵線通車。\n1996年11月，成立「行政院觀光發展推動小組」，協調解決跨部會觀光課題。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "1999",
    "text": "1999年訂定台灣溫泉觀光年",
    "desc":"訂為「台灣溫泉觀光年」，核定「溫泉開發管理方案」，對14處溫泉區分期整建，奠定日後發展台灣溫泉美食嘉年華活動基礎。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2000",
    "text": "2000年研訂「21世紀台灣發展觀光新戰略」，觀光產業列為重要策略性產業。",
    "desc":""
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2001",
    "text": "2001年啟動台灣觀光形象識別標誌、打造台灣成為觀光之島",
    "desc":"2001年1月，全面實施週休二日，帶動國內旅遊風潮與觀光事業發展。啟動台灣觀光形象識別標誌「Taiwan-Touch Your Heart」。首次推出日本市場台灣觀光代言人—渡邊滿里奈。\n2001年研訂「觀光政策白皮書」，打造台灣成為觀光之島。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2002",
    "text": "2002年進入網路數位行銷時代、啟動觀光客倍增計畫",
    "desc":"2002年6月，建置台灣觀光資訊網，整合觀光資訊進入網路數位行銷時代。\n2002年7月，「行政院觀光發展推動小組」提升為「行政院觀光發展推動委員會」。\n2002年8月，啟動「觀光客倍增計畫」。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2003",
    "text": "2003年實施國民旅遊卡",
    "desc":"2003年1月，實施「國民旅遊卡」制度，帶動國民旅遊風潮。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2004",
    "text": "2004年啟動台灣觀巴",
    "desc":"2004年1月，啟動「台灣觀光年」，台灣觀光巴士旅遊產品上路。（2012年6月更名為「台灣觀巴」）。\n2004年5月，導入旅遊諮詢統一識別形象「ｉ標誌」（i-Center）。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2005",
    "text": "2005年日本旅客突破100萬人次",
    "desc":"2005年11月，來台旅客首度突破300萬人次；日本來台旅客突破100萬人次。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2006",
    "text": "2006年10月，成立財團法人台灣海峽兩岸觀光旅遊協會（台旅會），開啟兩岸旅遊交流。",
    "desc":""
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2007",
    "text": "2007年台灣高鐵全線通車",
    "desc":"2007年3月，台灣高鐵全線通車，開啟國人台北—高雄一日旅遊生活圈。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2008",
    "text": "2008年開放陸客來台觀光，首發團抵台",
    "desc":"2008年2月，啟動「2008-2009旅行台灣年」計畫，打造台灣為亞洲最佳旅遊地。\n2008年6月「海峽交流基金會」與「海峽兩岸關係協會」簽署「海峽兩岸關於大陸居民赴台灣旅遊協議」。\n2008年7月，開放中國大陸旅客來台觀光，兩岸首發團正式抵台。。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2009",
    "text": "2009年啟動觀光拔尖領航方案",
    "desc":"2009年4月，行政院將觀光列為台灣六大新興產業，啟動「觀光拔尖領航方案」。\n2009年7月，「台灣海峽兩岸觀光旅遊協會」與「海峽兩岸旅遊交流協會」於北京舉辦首次海峽兩岸旅遊交流圓桌會議。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2010",
    "text": "2010年首次辦理星級旅館評鑑、首度舉辦臺灣自行車節",
    "desc":"2010年2月，於南京舉辦首屆台灣．江蘇交流燈會。\n2010年4月，啟動重要觀光景點接駁公車「台灣好行」。\n2010年5月，台旅會成立「北京辦事處」；2012年11月「上海辦事處」揭牌。\n2010年7月，首次辦理星級旅館評鑑，提供旅客不同消費選擇，有助提升旅館軟硬體之服務。\n2010年10月，首度舉辦「臺灣自行車節」系列活動。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2011",
    "text": "2011年推出台灣觀光新品牌、開放陸客自由行",
    "desc":"2011年2月，建國100年，推出台灣觀光新品牌 Taiwan-The Heart of Asia，以「亞洲精華・心動台灣」為主題，歡迎全球旅客體驗旅行台灣的感動，並以「Time for Taiwan 旅行台灣，就是現在」訴求台灣觀光新時代的來臨。\n2011年6月，開放大陸旅客來台自由行。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2012",
    "text": "2012年推出旅行台灣APP",
    "desc":"2012年5月，台越觀光合作新里程，簽訂「台越觀光合作瞭解備忘錄」。\n2012年6月，擴大智慧觀光推出「旅行台灣APP」。\n2012年11月，建置「台灣旅宿網」。\n2012年12月，推出「台灣觀光年曆」。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2013",
    "text": "2013年推動寶島仲夏節",
    "desc":"2013年5月，推出全新觀光大型活動「台灣夏至235」（2018年轉型更名為「寶島仲夏節」）。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2014",
    "text": "2014年籌組ACC亞洲郵輪聯盟、超級任務組喔熊組長擔任台灣觀光大使",
    "desc":"2014年4月，與香港簽定「亞洲郵輪專案 ACF（Asia Cruise Fund）」，強化亞洲郵輪市場競爭力。2015年更名為亞洲郵輪聯盟ACC（Asia Cruise Cooperation）。\n2014年6月，觀光局代言人超級任務組「喔熊組長（OhBear）」就任，推動台灣觀光。\n2014年12月，推出「借問站」創新旅遊服務。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2015",
    "text": "2015年國際旅客突破1000萬人次",
    "desc":"2015年8月，行政院核定「跨域亮點及特色加值計畫中程計畫（104-107）」。\n2015年11月，實施東南亞優質團旅客簽證便捷措施（觀宏專案），成功開拓新南向市場。\n2015年12月，來台旅客突破1,000萬人次，邁入新里程碑。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2016",
    "text": "2016年推動新南向政策",
    "desc":"推動新南向政策，放寬、簡化來台簽證措施。陸續於曼谷、胡志明市、倫敦等共設置15個辦事處，以及孟買、雅加達、雪梨、紐西蘭等設服務聯絡處。來台旅客人次快速成長。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2017",
    "text": "2017年生態旅遊年、Tourism 2020：台灣永續觀光發展方案",
    "desc":"2017年1月，啟動2017生態旅遊年，促進台灣永續觀光發展。\n2017年1月，啟動「Tourism 2020：台灣永續觀光發展方案」，營造台灣成為友善、智慧、體驗觀光國度。以四年推廣主題2017生態旅遊年、2018海灣旅遊年、2019小鎮漫遊年、2020脊梁山脈旅遊年，促進台灣永續觀光發展。\n2017年3月，訂定每年3月第三週為「旅遊安全宣導週」。\n2017年12月，新南向國家來台旅客突破200萬人次。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2018",
    "text": "2018年海灣旅遊年",
    "desc":"2018年1月，主辦世界最美麗的海灣年會，啟動2018海灣旅遊年，強化「台灣10+島」旅遊魅力。\n2018年3月，與米其林合作首度出版《台北米其林指南》。\n2018年11月，和平島公園及白沙灣2處榮獲Svayam Accessibility Awards 2018最佳無障礙觀光景點獎。\n2018年12月，來台旅客突破1,100萬人次。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2019",
    "text": "2019年小鎮漫遊年",
    "desc":"2019年1月，啟動2019小鎮漫遊年，以台灣40小鎮帶動地方特色旅遊發展。\n2019年2月，結盟高雄餐旅大學、高雄科技大學、海洋大學三校簽訂台灣郵輪研發MOU，支援ACC，打造亞洲郵輪研究重鎮。\n2019年2月，台灣燈會邁入第30年，以「屏安鵬來・光耀30」為主題，首創結合海洋3D展演，主燈「巨鮪來富」打破12生肖造型，並榮獲2019台灣活動卓越獎等國際優良設計獎。\n2019年12月，召開全國觀光政策發展會議。\n2019年12月，日本來台旅客突破200萬人次。"
  }, 
  {
    "category": "",
    "size": 4,
    "year": "2020",
    "text": "2020年脊梁山脈旅遊年",
    "desc":"2020年1月，啟動2020脊梁山脈旅遊年，以形塑台灣為知名國際登山、山脈旅遊勝地。"
  }
];

chart.dateFormatter.inputDateFormat = "yyyy";

chart.fontSize = 13;
chart.tooltipContainer.fontSize = 13;

var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "category";
categoryAxis.renderer.grid.template.disabled = true;

var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.points = [{ x: -400, y: 0 }, { x: 0, y: 50 }, { x: 400, y: 0 }]
dateAxis.renderer.polyspline.tensionX = 0.8;
dateAxis.renderer.grid.template.disabled = true;
dateAxis.renderer.line.strokeDasharray = "1,4";
dateAxis.baseInterval = {period:"day", count:1}; // otherwise initial animation will be not smooth

dateAxis.renderer.labels.template.disabled = true;

var series = chart.series.push(new am4plugins_timeline.CurveLineSeries());
series.strokeOpacity = 0;
series.dataFields.dateX = "year";
series.dataFields.categoryY = "category";
series.dataFields.value = "size";
series.baseAxis = categoryAxis;

var interfaceColors = new am4core.InterfaceColorSet();

series.tooltip.pointerOrientation = "down";

var distance = 100;
var angle = 60;

var bullet = series.bullets.push(new am4charts.Bullet());

var line = bullet.createChild(am4core.Line);
line.adapter.add("stroke", function(fill, target) {
  if (target.dataItem) {
    return chart.colors.getIndex(target.dataItem.index)
  }
});

line.x1 = 0;
line.y1 = 0;
line.y2 = 0;
line.x2 = distance - 10;
line.strokeDasharray = "1,3";

var circle = bullet.createChild(am4core.Circle);
circle.radius = 30;
circle.fillOpacity = 1;
circle.strokeOpacity = 0;

var circleHoverState = circle.states.create("hover");
circleHoverState.properties.scale = 1.3;

series.heatRules.push({ target: circle, min: 20, max: 50, property: "radius" });
circle.adapter.add("fill", function(fill, target) {
  if (target.dataItem) {
    return chart.colors.getIndex(target.dataItem.index)
  }
});
circle.tooltipText = "{text}: \n {desc}";
circle.adapter.add("tooltipY", function(tooltipY, target){
  return -target.pixelRadius - 4;
});

var yearLabel = bullet.createChild(am4core.Label);
yearLabel.text = "{year}";
yearLabel.strokeOpacity = 0;
yearLabel.fill = am4core.color("#fff");
yearLabel.horizontalCenter = "middle";
yearLabel.verticalCenter = "middle";
yearLabel.interactionsEnabled = false;

var label = bullet.createChild(am4core.Label);
label.propertyFields.text = "text";
label.strokeOpacity = 0;
label.horizontalCenter = "right";
label.verticalCenter = "middle";

label.adapter.add("opacity", function(opacity, target) {
  if(target.dataItem){
    var index = target.dataItem.index;
    var line = target.parent.children.getIndex(0);

    if (index % 2 == 0) {
      target.y = -distance * am4core.math.sin(-angle);
      target.x = -distance * am4core.math.cos(-angle);
      line.rotation = -angle - 180;
      target.rotation = -angle;
    }
    else {
      target.y = -distance * am4core.math.sin(angle);
      target.x = -distance * am4core.math.cos(angle);
      line.rotation = angle - 180;
      target.rotation = angle;
    }
  }
  return 1;
});

var outerCircle = bullet.createChild(am4core.Circle);
outerCircle.radius = 30;
outerCircle.fillOpacity = 0;
outerCircle.strokeOpacity = 0;
outerCircle.strokeDasharray = "1,3";

var hoverState = outerCircle.states.create("hover");
hoverState.properties.strokeOpacity = 0.8;
hoverState.properties.scale = 1.5;

outerCircle.events.on("over", function(event){
  var circle = event.target.parent.children.getIndex(1);
  circle.isHover = true;
  event.target.stroke = circle.fill;
  event.target.radius = circle.pixelRadius;
  event.target.animate({property: "rotation", from: 0, to: 360}, 4000, am4core.ease.sinInOut);
});

outerCircle.events.on("out", function(event){
  var circle = event.target.parent.children.getIndex(1);
  circle.isHover = false;
});

chart.scrollbarX = new am4core.Scrollbar();
chart.scrollbarX.opacity = 0.5;
chart.scrollbarX.width = am4core.percent(50);
chart.scrollbarX.align = "center";

}); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>