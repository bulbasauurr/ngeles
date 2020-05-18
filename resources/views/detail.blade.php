<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Course Detail</title>

<style id="applicationStylesheet" type="text/css">
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Course_Detail {
		position: absolute;
		width: 1920px;
		height: 1080px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: Course Detail;
		--web-view-id: Course_Detail;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	@keyframes fadein {
	
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	
	}
	#Image_2 {
		position: absolute;
		width: 866px;
		height: 577px;
		left: 128px;
		top: 287px;
		overflow: visible;
	}
	#Speaking {
		position: absolute;
		left: 1407px;
		top: 354px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 26px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(125,133,151,1);
	}
	#Praktekan_Bahasa_Inggrismu_di_ {
		position: absolute;
		left: 1083px;
		top: 280px;
		overflow: visible;
		width: 561px;
		white-space: nowrap;
		line-height: 54px;
		margin-top: -9.5px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 35px;
		color: rgba(71,86,119,1);
	}
	#time {
		position: absolute;
		width: 122px;
		height: 33px;
		left: 1083px;
		top: 393px;
		overflow: visible;
	}
	#Rectangle_9 {
		opacity: 0.1;
	}
	.Rectangle_9 {
		position: absolute;
		overflow: visible;
		width: 122px;
		height: 33px;
		left: 0px;
		top: 0px;
	}
	#ID12_day_s_ {
		position: absolute;
		left: 31px;
		top: 8px;
		overflow: visible;
		width: 62px;
		white-space: nowrap;
		line-height: 26px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(0,181,146,1);
	}
	#______8_963_ {
		position: absolute;
		left: 1246px;
		top: 400px;
		overflow: visible;
		width: 92px;
		white-space: nowrap;
		line-height: 26px;
		margin-top: -6px;
		text-align: left;
		font-family: Font Awesome 5 Free;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(255,190,88,1);
	}
	#banner {
		position: absolute;
		width: 1920px;
		height: 110px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Menubar {
		position: absolute;
		width: 1920px;
		height: 110px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Menubar_ {
		position: absolute;
		width: 1920px;
		height: 110px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	.Rectangle_153 {
		position: absolute;
		overflow: visible;
		width: 1920px;
		height: 110px;
		left: 0px;
		top: 0px;
	}
	#Language {
		position: absolute;
		width: 46.479px;
		height: 18px;
		left: 1743.521px;
		top: 48px;
		overflow: visible;
	}
	#globe {
		position: absolute;
		width: 15px;
		height: 15px;
		left: 0px;
		top: 3px;
		overflow: visible;
	}
	.Path_1126 {
		overflow: visible;
		position: absolute;
		width: 2.898px;
		height: 3.702px;
		left: 0px;
		top: 5.649px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1127 {
		overflow: visible;
		position: absolute;
		width: 2.898px;
		height: 3.702px;
		left: 12.102px;
		top: 5.649px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1128 {
		overflow: visible;
		position: absolute;
		width: 3.771px;
		height: 3.355px;
		left: 10.596px;
		top: 0.347px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1129 {
		overflow: visible;
		position: absolute;
		width: 3.771px;
		height: 3.355px;
		left: 0.634px;
		top: 11.298px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1130 {
		overflow: visible;
		position: absolute;
		width: 3.771px;
		height: 3.355px;
		left: 0.634px;
		top: 0.347px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1131 {
		overflow: visible;
		position: absolute;
		width: 4.963px;
		height: 3.702px;
		left: 5.019px;
		top: 11.298px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1132 {
		overflow: visible;
		position: absolute;
		width: 3.771px;
		height: 3.355px;
		left: 10.596px;
		top: 11.298px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1133 {
		overflow: visible;
		position: absolute;
		width: 5.555px;
		height: 3.702px;
		left: 4.723px;
		top: 5.649px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1134 {
		overflow: visible;
		position: absolute;
		width: 4.963px;
		height: 3.702px;
		left: 5.019px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#eng {
		position: absolute;
		left: 20.479px;
		top: 0px;
		overflow: visible;
		width: 27px;
		white-space: nowrap;
		line-height: 26px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(255,255,255,1);
	}
	#Group_845 {
		position: absolute;
		width: 345px;
		height: 18px;
		left: 1355px;
		top: 48px;
		overflow: visible;
	}
	#Home {
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 42px;
		white-space: nowrap;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Home.html;
		cursor: pointer;
		line-height: 26px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(255,255,255,1);
	}
	#Feedback {
		position: absolute;
		left: 277px;
		top: 0px;
		overflow: visible;
		width: 69px;
		white-space: nowrap;
		line-height: 26px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(255,255,255,1);
	}
	#Lembaga {
		position: absolute;
		left: 172px;
		top: 0px;
		overflow: visible;
		width: 65px;
		white-space: nowrap;
		line-height: 26px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(255,255,255,1);
	}
	#Course {
		position: absolute;
		left: 82px;
		top: 0px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 26px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(255,255,255,1);
	}
	#Ngeles_Logo {
		position: absolute;
		width: 137px;
		height: 56px;
		left: 61px;
		top: 34px;
		overflow: visible;
	}
	#_com {
		position: absolute;
		left: 64px;
		top: 32px;
		overflow: visible;
		width: 50px;
		white-space: nowrap;
		line-height: 56px;
		margin-top: -18px;
		text-align: left;
		font-family: Humnst777 Lt BT;
		font-style: normal;
		font-weight: lighter;
		font-size: 20px;
		color: rgba(255,190,88,1);
		letter-spacing: 1.1px;
	}
	#Ngeles {
		position: absolute;
		left: 0px;
		top: 0px;
		overflow: visible;
		width: 138px;
		white-space: nowrap;
		text-align: left;
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
		font-size: 40px;
		color: rgba(255,255,255,1);
		letter-spacing: 0.1px;
	}
	#_ {
		position: absolute;
		left: 99px;
		top: 0px;
		overflow: visible;
		width: 11px;
		white-space: nowrap;
		text-align: left;
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
		font-size: 40px;
		color: rgba(255,190,88,1);
		letter-spacing: 0.1px;
	}
	#Group_868 {
		position: absolute;
		width: 31px;
		height: 31px;
		left: 1836px;
		top: 42px;
		overflow: visible;
	}
	.Ellipse_9 {
		position: absolute;
		overflow: visible;
		width: 31px;
		height: 31px;
		left: 0px;
		top: 0px;
	}
	.Icon_open_question_mark {
		overflow: visible;
		position: absolute;
		width: 11px;
		height: 11px;
		left: 9.655px;
		top: 10.47px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_849 {
		position: absolute;
		width: 175px;
		height: 38px;
		left: 1144px;
		top: 38px;
		overflow: visible;
	}
	.Rectangle_162 {
		position: absolute;
		overflow: visible;
		width: 175px;
		height: 38px;
		left: 0px;
		top: 0px;
	}
	#Search {
		position: absolute;
		left: 46px;
		top: 11px;
		overflow: visible;
		width: 43px;
		white-space: nowrap;
		line-height: 33px;
		margin-top: -10.5px;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: lighter;
		font-size: 12px;
		color: rgba(255,255,255,1);
	}
	.Ellipse_7 {
		position: absolute;
		overflow: visible;
		width: 13px;
		height: 13px;
		left: 11px;
		top: 10px;
	}
	.Line_195 {
		overflow: visible;
		position: absolute;
		width: 5.707px;
		height: 5.707px;
		left: 21.5px;
		top: 20.5px;
		transform: matrix(1,0,0,1,0,0);
	}
	#IDR_600_000 {
		position: absolute;
		left: 1083px;
		top: 471px;
		overflow: visible;
		width: 206px;
		white-space: nowrap;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 35px;
		color: rgba(153,153,153,1);
	}
	#Facilities {
		position: absolute;
		left: 1083px;
		top: 556px;
		overflow: visible;
		width: 83px;
		white-space: nowrap;
		line-height: 26px;
		margin-top: -3px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(153,153,153,1);
	}
	#______Penginapan_______Laundry {
		position: absolute;
		left: 1083px;
		top: 597px;
		overflow: visible;
		width: 427px;
		white-space: nowrap;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 27px;
		color: rgba(153,153,153,1);
		letter-spacing: 0.05px;
	}
	#Icon_feather_home {
		position: absolute;
		width: 17.925px;
		height: 19.917px;
		left: 1083px;
		top: 601px;
		overflow: visible;
	}
	.Path_1136 {
		overflow: visible;
		position: absolute;
		width: 20.925px;
		height: 22.917px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1137 {
		overflow: visible;
		position: absolute;
		width: 8.975px;
		height: 12.958px;
		left: 5.975px;
		top: 9.958px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Icon_map_laundry {
		overflow: visible;
		position: absolute;
		width: 20.617px;
		height: 22.526px;
		left: 1082px;
		top: 646px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Icon_map_food {
		overflow: visible;
		position: absolute;
		width: 29.202px;
		height: 22.951px;
		left: 1078px;
		top: 690px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Icon_ionic_ios_people {
		position: absolute;
		width: 31.57px;
		height: 20.517px;
		left: 1078px;
		top: 741px;
		overflow: visible;
	}
	.Path_1138 {
		overflow: visible;
		position: absolute;
		width: 19.568px;
		height: 20.517px;
		left: 5.977px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1139 {
		overflow: visible;
		position: absolute;
		width: 9.978px;
		height: 13.521px;
		left: 0px;
		top: 3.459px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1140 {
		overflow: visible;
		position: absolute;
		width: 9.978px;
		height: 13.521px;
		left: 21.593px;
		top: 3.459px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Rectangle_154 {
		position: absolute;
		overflow: visible;
		width: 209px;
		height: 44px;
		left: 1098px;
		top: 821px;
	}
	.Rectangle_155 {
		position: absolute;
		overflow: visible;
		width: 209px;
		height: 44px;
		left: 1347px;
		top: 821px;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Akun.html;
		cursor: pointer;
	}
	#Ask_a_question {
		position: absolute;
		left: 1151px;
		top: 834px;
		overflow: visible;
		width: 104px;
		white-space: nowrap;
		line-height: 26px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(153,153,153,1);
		letter-spacing: 0.05px;
	}
	#Book {
		position: absolute;
		left: 1434px;
		top: 834px;
		overflow: visible;
		width: 36px;
		white-space: nowrap;
		line-height: 26px;
		margin-top: -5.5px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 15px;
		color: rgba(71,86,119,1);
		letter-spacing: 0.05px;
	}
	#Group_847 {
		position: absolute;
		width: 97px;
		height: 29px;
		left: 128px;
		top: 174px;
		overflow: visible;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: Courses.html;
		cursor: pointer;
	}
	#Icon_feather_arrow_left_circle {
		position: absolute;
		width: 30.012px;
		height: 26.789px;
		left: 0px;
		top: 1px;
		overflow: visible;
	}
	.Path_1141 {
		overflow: visible;
		position: absolute;
		width: 33.012px;
		height: 29.789px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1142 {
		overflow: visible;
		position: absolute;
		width: 9.621px;
		height: 16.243px;
		left: 9.004px;
		top: 7.395px;
		transform: matrix(1,0,0,1,0,0);
	}
	.Path_1143 {
		overflow: visible;
		position: absolute;
		width: 15px;
		height: 3px;
		left: 9.006px;
		top: 13.395px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Back {
		position: absolute;
		left: 40px;
		top: 0px;
		overflow: visible;
		width: 58px;
		white-space: nowrap;
		line-height: 33px;
		margin-top: -4px;
		text-align: left;
		font-family: Rubik;
		font-style: normal;
		font-weight: normal;
		font-size: 25px;
		color: rgba(153,153,153,1);
	}
</style>
</head>
<body>
    <div id="Course_Detail">
        <img id="Image_2" src="Image_2.png" srcset="Image_2.png 1x, Image_2@2x.png 2x">
        <div id="Speaking">
            <span>Speaking</span>
        </div>
        <div id="Praktekan_Bahasa_Inggrismu_di_">
            <span>Praktekan Bahasa Inggrismu di<br/>Kampung Inggris</span>
        </div>
        <div id="time">
            <svg class="Rectangle_9">
                <rect fill="rgba(0,181,146,1)" id="Rectangle_9" rx="16.5" ry="16.5" x="0" y="0" width="122" height="33">
                </rect>
            </svg>
            <div id="ID12_day_s_">
                <span>12 day(s)</span>
            </div>
        </div>
        <div id="______8_963_">
            <span>*****</span><span style="font-family:Rubik;font-style:normal;font-weight:normal;color:rgba(125,133,151,1);">(8,963)</span>
        </div>
        <div id="banner">
            <div id="Menubar">
                <div id="Menubar_">
                    <svg class="Rectangle_153">
                        <rect fill="rgba(71,86,119,1)" id="Rectangle_153" rx="0" ry="0" x="0" y="0" width="1920" height="110">
                        </rect>
                    </svg>
                    <div id="Language">
                        <div id="globe">
                            <svg class="Path_1126" viewBox="250 200.143 2.898 3.702">
                                <path fill="rgba(255,190,88,1)" id="Path_1126" d="M 252.7771301269531 201.9942016601563 C 252.7771301269531 201.3533935546875 252.8218383789063 200.7358703613281 252.8983001708984 200.1430053710938 L 250.2727813720703 200.1430053710938 C 250.0971832275391 200.7300415039063 250 201.3507995605469 250 201.9942016601563 C 250 202.6376342773438 250.0971832275391 203.2583618164063 250.2727813720703 203.8453979492188 L 252.8983001708984 203.8453979492188 C 252.8218383789063 203.2525329589844 252.7771301269531 202.6350402832031 252.7771301269531 201.9942016601563 Z">
                                </path>
                            </svg>
                            <svg class="Path_1127" viewBox="265.527 200.143 2.898 3.702">
                                <path fill="rgba(255,190,88,1)" id="Path_1127" d="M 265.6481628417969 201.9942016601563 C 265.6481628417969 202.6350402832031 265.6034545898438 203.2525329589844 265.5270080566406 203.8453979492188 L 268.1525268554688 203.8453979492188 C 268.328125 203.2583618164063 268.42529296875 202.6376342773438 268.42529296875 201.9942016601563 C 268.42529296875 201.3507995605469 268.328125 200.7300415039063 268.1525268554688 200.1430053710938 L 265.5270080566406 200.1430053710938 C 265.6034545898438 200.7358703613281 265.6481628417969 201.3533935546875 265.6481628417969 201.9942016601563 Z">
                                </path>
                            </svg>
                            <svg class="Path_1128" viewBox="263.203 193.536 3.77 3.355">
                                <path fill="rgba(255,190,88,1)" id="Path_1128" d="M 266.9728088378906 196.89111328125 C 266.2243957519531 195.3217620849609 264.8663024902344 194.1003570556641 263.2030029296875 193.5359802246094 C 263.806884765625 194.3543548583984 264.2811889648438 195.52197265625 264.5585327148438 196.89111328125 L 266.9728088378906 196.89111328125 Z">
                                </path>
                            </svg>
                            <svg class="Path_1129" viewBox="250.979 207.286 3.77 3.355">
                                <path fill="rgba(255,190,88,1)" id="Path_1129" d="M 250.9789886474609 207.2859802246094 C 251.7273864746094 208.8553466796875 253.0854949951172 210.0767517089844 254.7487945556641 210.64111328125 C 254.1449127197266 209.82275390625 253.6705932617188 208.6551208496094 253.3932800292969 207.2859802246094 L 250.9789886474609 207.2859802246094 Z">
                                </path>
                            </svg>
                            <svg class="Path_1130" viewBox="250.979 193.536 3.77 3.355">
                                <path fill="rgba(255,190,88,1)" id="Path_1130" d="M 253.3932800292969 196.89111328125 C 253.6705932617188 195.52197265625 254.1449127197266 194.3543548583984 254.7487945556641 193.5359802246094 C 253.0854949951172 194.1003570556641 251.7273864746094 195.3217620849609 250.9789886474609 196.89111328125 L 253.3932800292969 196.89111328125 Z">
                                </path>
                            </svg>
                            <svg class="Path_1131" viewBox="256.17 207.286 4.963 3.702">
                                <path fill="rgba(255,190,88,1)" id="Path_1131" d="M 261.1333312988281 207.2859802246094 L 256.1700134277344 207.2859802246094 C 256.6637573242188 209.515625 257.6972351074219 210.9884033203125 258.6516723632813 210.9884033203125 C 259.6060791015625 210.9884033203125 260.6395874023438 209.515625 261.1333312988281 207.2859802246094 Z">
                                </path>
                            </svg>
                            <svg class="Path_1132" viewBox="263.203 207.286 3.77 3.355">
                                <path fill="rgba(255,190,88,1)" id="Path_1132" d="M 264.5585327148438 207.2859802246094 C 264.2811889648438 208.6551208496094 263.806884765625 209.82275390625 263.2030029296875 210.64111328125 C 264.8663024902344 210.0767517089844 266.2243957519531 208.8553466796875 266.9728088378906 207.2859802246094 L 264.5585327148438 207.2859802246094 Z">
                                </path>
                            </svg>
                            <svg class="Path_1133" viewBox="255.714 200.143 5.554 3.702">
                                <path fill="rgba(255,190,88,1)" id="Path_1133" d="M 261.2682495117188 201.9942016601563 C 261.2682495117188 201.3442993164063 261.2209777832031 200.7255249023438 261.1393432617188 200.1430053710938 L 255.8429260253906 200.1430053710938 C 255.7612915039063 200.7255249023438 255.7139892578125 201.3442993164063 255.7139892578125 201.9942016601563 C 255.7139892578125 202.6441040039063 255.7612915039063 203.2629089355469 255.8429260253906 203.8453979492188 L 261.1393432617188 203.8453979492188 C 261.2209777832031 203.2629089355469 261.2682495117188 202.6441040039063 261.2682495117188 201.9942016601563 Z">
                                </path>
                            </svg>
                            <svg class="Path_1134" viewBox="256.17 193 4.963 3.702">
                                <path fill="rgba(255,190,88,1)" id="Path_1134" d="M 256.1700134277344 196.7024230957031 L 261.1333312988281 196.7024230957031 C 260.6395874023438 194.4728088378906 259.6060791015625 193 258.6516723632813 193 C 257.6972351074219 193 256.6637573242188 194.4728088378906 256.1700134277344 196.7024230957031 Z">
                                </path>
                            </svg>
                        </div>
                        <div id="eng">
                            <span>eng</span>
                        </div>
                    </div>
                    <div id="Group_845">
                        <div onclick="application.goToTargetView(event)" id="Home">
                            <span>Home</span>
                        </div>
                        <div id="Feedback">
                            <span>Feedback</span>
                        </div>
                        <div id="Lembaga">
                            <span>Lembaga</span>
                        </div>
                        <div id="Course">
                            <span>Course</span>
                        </div>
                    </div>
                </div>
                <div id="Ngeles_Logo">
                    <div id="_com">
                        <span>.com</span>
                    </div>
                    <div id="Ngeles">
                        <span>Ngel</span><span style="color:rgba(255,190,88,1);">e</span><span>s</span>
                    </div>
                    <div id="_">
                        <span>`</span>
                    </div>
                </div>
                <div id="Group_868">
                    <svg class="Ellipse_9">
                        <ellipse fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_9" rx="15.5" ry="15.5" cx="15.5" cy="15.5">
                        </ellipse>
                    </svg>
                    <svg class="Icon_open_question_mark" viewBox="0 0 11 11">
                        <path fill="rgba(255,255,255,1)" id="Icon_open_question_mark" d="M 5.466801643371582 0 C 3.585513591766357 0 2.191147565841675 0.3574999868869781 1.305835962295532 0.9075000286102295 C 0.4205240905284882 1.457500100135803 0.1106649413704872 2.144999742507935 9.5367431640625e-07 2.667500257492065 L 2.21328067779541 2.846250057220459 C 2.301811695098877 2.502500057220459 2.478874206542969 2.158750057220459 2.899397134780884 1.897500157356262 C 3.319920301437378 1.636250019073486 3.983904361724854 1.375 5.466802597045898 1.375 C 6.927566528320313 1.375 7.724347591400146 1.595000028610229 8.16700267791748 1.842499971389771 C 8.609660148620605 2.090000152587891 8.786722183227539 2.392500162124634 8.786722183227539 2.75 C 8.786722183227539 3.891250133514404 8.034206390380859 4.207499980926514 6.927567481994629 4.8125 C 5.820927619934082 5.417500495910645 4.36016321182251 6.297500610351563 4.36016321182251 7.906249523162842 L 4.36016321182251 8.250000953674316 L 6.573442935943604 8.250000953674316 L 6.573442935943604 7.906249523162842 C 6.573442935943604 6.764999866485596 7.259559154510498 6.448750495910645 8.366198539733887 5.84375 C 9.472838401794434 5.238749980926514 11.00000095367432 4.358749866485596 11.00000095367432 2.75 C 11.00000095367432 2.090000152587891 10.62374496459961 1.347499966621399 9.69416618347168 0.8112500309944153 C 8.742456436157227 0.2750000059604645 7.325957298278809 0 5.466803073883057 0 Z M 4.360161781311035 9.625 L 4.360161781311035 11 L 6.573441028594971 11 L 6.573441028594971 9.625 L 4.360161304473877 9.625 Z">
                        </path>
                    </svg>
                </div>
                <div id="Group_849">
                    <svg class="Rectangle_162">
                        <rect fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Rectangle_162" rx="19" ry="19" x="0" y="0" width="175" height="38">
                        </rect>
                    </svg>
                    <div id="Search">
                        <span>Search</span>
                    </div>
                    <svg class="Ellipse_7">
                        <ellipse fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Ellipse_7" rx="6.5" ry="6.5" cx="6.5" cy="6.5">
                        </ellipse>
                    </svg>
                    <svg class="Line_195" viewBox="0 0 5 5">
                        <path fill="transparent" stroke="rgba(255,255,255,1)" stroke-width="1px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="Line_195" d="M 0 0 L 5 5">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div id="IDR_600_000">
            <span>IDR 600,000</span>
        </div>
        <div id="Facilities">
            <span>Facilities</span>
        </div>
        <div id="______Penginapan_______Laundry">
            <span>      Penginapan<br/>      Laundry<br/>      Catering<br/>      Lingkungan Berbahasa Inggris</span>
        </div>
        <svg class="Rectangle_154">
            <rect fill="rgba(153,153,153,0.22)" id="Rectangle_154" rx="22" ry="22" x="0" y="0" width="209" height="44">
            </rect>
        </svg>
        <svg class="Rectangle_155">
            <rect fill="rgba(255,190,88,1)" onclick="application.goToTargetView(event)" id="Rectangle_155" rx="22" ry="22" x="0" y="0" width="209" height="44">
            </rect>
        </svg>
        <div id="Ask_a_question">
            <span>Ask a question</span>
        </div>
        <div id="Book">
            <span>Book</span>
        </div>
    </div>
    </body>
    </html>