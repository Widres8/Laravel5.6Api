<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>SysLey</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">
        .ExternalClass {width: 100%;}
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div, .ExternalClass b, .ExternalClass br, .ExternalClass img {line-height: 100% !important;}
        /* iOS BLUE LINKS */
        .appleBody a {color:#212121; text-decoration: none;}
        .appleFooter a {color:#212121!important; text-decoration: none!important;}
        /* END iOS BLUE LINKS */
        img {color: #ffffff;text-align: center;font-family: Open Sans, Helvetica, Arial, sans-serif;display: block;}
        body {margin: 0;padding: 0;-webkit-text-size-adjust: 100% !important;-ms-text-size-adjust: 100% !important;font-family: 'Open Sans', Helvetica, Arial, sans-serif!important;}
        body,#body_style {background: #fffffe;}
        table td {border-collapse: collapse;border-spacing: 0 !important;}
        table tr {border-collapse: collapse;border-spacing: 0 !important;}
        table tbody {border-collapse: collapse;border-spacing: 0 !important;}
        table {border-collapse: collapse;border-spacing: 0 !important;}
        span.yshortcuts,a span.yshortcuts {color: #000001;background-color: none;border: none;}
        span.yshortcuts:hover,
        span.yshortcuts:active,
        span.yshortcuts:focus {color: #000001; background-color: none; border: none;}
        img {-ms-interpolation-mode: : bicubic;}
        a[x-apple-data-detectors] {color: inherit !important;text-decoration: none !important;font-size: inherit !important;font-family: inherit !important;font-weight: inherit !important;line-height: inherit !important;
        }
        /**** My desktop styles ****/
        @media only screen and (min-width: 600px) {
          .noDesk {display: none !important;}
          .td-padding {padding-left: 15px!important;padding-right: 15px!important;}
          .padding-container {padding: 0px 15px 0px 15px!important;mso-padding-alt: 0px 15px 0px 15px!important;}
          .mobile-column-left-padding { padding: 0px 0px 0px 0px!important; mso-alt-padding: 0px 0px 0px 0px!important; }
          .mobile-column-right-padding { padding: 0px 0px 0px 0px!important; mso-alt-padding: 0px 0px 0px 0px!important; }
          .mobile {display: none !important}
        }
        /**** My mobile styles ****/
        @media only screen and (max-width: 599px) and (-webkit-min-device-pixel-ratio: 1) {
          *[class].wrapper { width:100% !important; }
          *[class].container { width:100% !important; }
          *[class].mobile { width:100% !important; display:block !important; }
          *[class].image{ width:100% !important; height:auto; }
          *[class].center{ margin:0 auto !important; text-align:center !important; }
          *[class="mobileOff"] { width: 0px !important; display: none !important; }
          *[class*="mobileOn"] { display: block !important; max-height:none !important; }
          p[class="mobile-padding"] {padding-left: 0px!important;padding-top: 10px;}
          .padding-container {padding: 0px 15px 0px 15px!important;mso-padding-alt: 0px 15px 0px 15px!important;}
          .hund {width: 100% !important;height: auto !important;}
          .td-padding {padding-left: 15px!important;padding-right: 15px!important;}
          .mobile-column-left-padding { padding: 18px 0px 18px 0px!important; mso-alt-padding: 18px 0px 18px 0px!important; }
          .mobile-column-right-padding { padding: 18px 0px 0px 0px!important; mso-alt-padding: 18px 0px 0px 0px!important; }
          .stack { width: 100% !important; }
          img {width: 100%!important;height: auto!important;}
          *[class="hide"] {display: none !important}
          *[class="Gmail"] {display: none !important}
          .Gmail {display: none !important}
          .bottom-padding-fix {padding: 0px 0px 18px 0px!important; mso-alt-padding: 0px 0px 18px 0px;}
        }
        .social, .social:active {
          opacity: 1!important;
          transform: scale(1);
          transition: all .2s!important;
        }
        .social:hover {
          opacity: 0.8!important;
          transform: scale(1.1);
          transition: all .2s!important;
        }
        .button.raised {
          transition: box-shadow 0.2s cubic-bezier(0.4, 0, 0.2, 1);
          transition: all .2s;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
        }
        .button.raised:hover {
          box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);transition: all .2s;
          -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);transition: all .2s;
          -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);transition: all .2s;
        }
        .card-1 {
          box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
          -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
          -moz-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
          transition: box-shadow .45s;
        }
        .card-1:hover {
          box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);
          -webkit-box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);
          -moz-box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);
          transition: box-shadow .45s;
        }
        .ripplelink{
          display:block
          color:#fff;
          text-decoration:none;
          position:relative;
          overflow:hidden;
          -webkit-transition: all 0.2s ease;
          -moz-transition: all 0.2s ease;
          -o-transition: all 0.2s ease;
          transition: all 0.2s ease;
          z-index:0;
        }
        .ripplelink:hover{
            z-index:1000;
        }
        .ink {
          display: block;
          position: absolute;
          background:rgba(255, 255, 255, 0.3);
          border-radius: 100%;
          -webkit-transform:scale(0);
             -moz-transform:scale(0);
               -o-transform:scale(0);
                  transform:scale(0);
        }
        .animate {
            -webkit-animation:ripple 0.65s linear;
           -moz-animation:ripple 0.65s linear;
            -ms-animation:ripple 0.65s linear;
             -o-animation:ripple 0.65s linear;
                animation:ripple 0.65s linear;
        }
        @-webkit-keyframes ripple {
            100% {opacity: 0; -webkit-transform: scale(2.5);}
        }
        @-moz-keyframes ripple {
            100% {opacity: 0; -moz-transform: scale(2.5);}
        }
        @-o-keyframes ripple {
            100% {opacity: 0; -o-transform: scale(2.5);}
        }
        @keyframes ripple {
            100% {opacity: 0; transform: scale(2.5);}
        }

      </style>
</head>
<body style="margin:0; padding:0; background-color: #eeeeee;" bgcolor="#eeeeee">
    <!--[if mso]>
    <style type="text/css">
    body, table, td {font-family: Arial, Helvetica, sans-serif !important;}
    </style>
    <![endif]-->
    <!-- START EMAIL -->
    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#eeeeee">
      <div class="Gmail" style="height: 1px !important; margin-top: -1px !important; max-width: 600px !important; min-width: 600px !important; width: 600px !important;"></div>
      <div style="display: none; max-height: 0px; overflow: hidden;">
        Paste your preview text here***
      </div>
      <!-- Insert &zwnj;&nbsp; hack after hidden preview text -->
      <div style="display: none; max-height: 0px; overflow: hidden;">
        &nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
      <tr><td height="36px"></td></tr>
      <!-- START CARD 2 -->
      <tr>
        <td width="100%" valign="top" align="center" class="padding-container" style="padding-top: 0px!important; padding-bottom: 18px!important; mso-padding-alt: 0px 0px 18px 0px;">
          <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="wrapper">
            <tr>
              <td>
                <table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td style="border-radius: 3px; border-bottom: 2px solid #d4d4d4;" class="card-1" width="100%" valign="top" align="center">
                      <table style="border-radius: 3px;" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="wrapper" bgcolor="#ffffff">
                        <tr>
                          <td align="center">
                            <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                              <!-- START HEADER IMAGE -->
                              <tr>
                                <td align="center" class="hund ripplelink" width="600">
                                  <img align="center" width="600" style="border-radius: 3px 3px 0px 0px; width: 100%; max-width: 600px!important" class="hund" src="http://paulgoddarddesign.com/emails/images/material-design/material-header-2.jpg">
                                </td>
                              </tr>
                              <!-- END HEADER IMAGE -->
                              <!-- START BODY COPY -->
                              <tr>
                                <td class="td-padding" align="left" style="font-family: 'Roboto Mono', monospace; color: #212121!important; font-size: 24px; line-height: 30px; padding-top: 18px; padding-left: 18px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 13px;">
                                    {{ __('validation.attributes.hi') }} {{ $name }},
                                </td>
                              </tr>
                              <tr>
                                <td class="td-padding" align="left" style="font-family: 'Roboto Mono', monospace; color: #212121!important; font-size: 16px; line-height: 24px; padding-top: 18px; padding-left: 18px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 18px;">
                                    {{ __('validation.attributes.thanks_creation_account') }}
                                </td>
                              </tr>
                              <tr>
                                <td class="td-padding" align="left" style="font-family: 'Roboto Mono', monospace; color: #212121!important; font-size: 16px; line-height: 24px; padding-top: 18px; padding-left: 18px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 18px;">
                                    {{ __('validation.attributes.verify_email') }}:
                                </td>
                              </tr>
                              <!-- END BODY COPY -->
                              <!-- BUTTON -->
                              <tr>
                                <td align="left" style="padding: 18px 18px 18px 18px; mso-alt-padding: 18px 18px 18px 18px!important;">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td>
                                        <table border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td align="left" style="border-radius: 3px;" bgcolor="#234688">
                                              <a class="button raised" href="{{ url('user/verify', $verification_code)}}" target="_blank" style="font-size: 14px; line-height: 14px; font-weight: 500; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 25px; border: 1px solid #234688; display: inline-block;">
                                                {{ __('validation.attributes.confirm_email') }}
                                            </a>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                              <!-- END BUTTON -->
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- END CARD 2 -->

      <!-- SPACER -->
      <!--[if gte mso 9]>
      <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
        <tr>
          <td align="center" valign="top" width="600" height="18">
            <![endif]-->
            <tr><td height="18px"></td></tr>
            <!--[if gte mso 9]>
          </td>
        </tr>
      </table>
      <![endif]-->
      <!-- END SPACER -->
      <!-- SPACER -->
      <!--[if gte mso 9]>
      <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
        <tr>
          <td align="center" valign="top" width="600" height="36">
            <![endif]-->
            <tr><td height="36px"></td></tr>
            <!--[if gte mso 9]>
          </td>
        </tr>
      </table>
      <![endif]-->
      <!-- END SPACER -->

    </table>
    <!-- END EMAIL -->
    <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;">
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    </div>
  </body>
</html>
