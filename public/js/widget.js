let url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?82740';
let s = document.createElement('script');
s.type = 'text/javascript';
s.async = true;
s.src = url;
let cta_text = ''
let options = {
	"enabled":true,
	"chatButtonSetting":{
		"backgroundColor":"#06875C",
		"ctaText":'',
		"borderRadius":"25",
		"marginLeft":"20",
		"marginBottom":"20",
		"marginRight":"50",
		"position":"left"
	},
	"brandSetting":{
		"brandName":"BebebNet::Network",
		"brandSubTitle":"ISP, Kabupaten Bandung",
		"brandImg":"https://rsi-test-frontend.vercel.app/_nuxt/img/profile-panel-footer.ec7a376.svg",
		"welcomeText":"Halo, new member/cliennt\nada yang bisa kami bantu ?\ncukup kirimkan pesan kepada kami sekarang untuk mendapatkan info lebih lanjut tentang akses internet kebut dari BebebNet::Network",
		"messageText":"Halo, Admin BebebNet ! kami butuh bantuan untuk pemasangan infrastruktur internet/wifi/hotspot {{page_link}}",
		"backgroundColor":"#0a5f54",
		"ctaText":"Start Chat",
		"borderRadius":"25",
		"autoShow":false,
		"phoneNumber":"6281284359312"
	}
};
s.onload = function() {
	CreateWhatsappChatWidget(options);
};
let x = document.getElementsByTagName('script')[0];
x.parentNode.insertBefore(s, x);