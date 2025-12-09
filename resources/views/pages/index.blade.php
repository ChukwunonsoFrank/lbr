<!DOCTYPE html>
<html class="aui ltr" dir="ltr" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <script>
        // Define dataLayer and the gtag function.
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        // Default ad_storage to 'denied'.
        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'analytics_storage': 'denied',
            'wait_for_update': 500

        });
    </script>

    <script type="text/javascript">
        window.gdprAppliesGlobally = true;
        (function() {
            function r(e) {
                if (!window.frames[e]) {
                    if (document.body && document.body.firstChild) {
                        var t = document.body;
                        var n = document.createElement("iframe");
                        n.style.display = "none";
                        n.name = e;
                        n.title = e;
                        t.insertBefore(n, t.firstChild)
                    } else {
                        setTimeout(function() {
                            r(e)
                        }, 5)
                    }
                }
            }

            function e(n, i, o, s, c) {
                function e(e, t, n, r) {
                    if (typeof n !== "function") {
                        return
                    }
                    if (!window[i]) {
                        window[i] = []
                    }
                    var a = false;
                    if (c) {
                        a = c(e, r, n)
                    }
                    if (!a) {
                        window[i].push({
                            command: e,
                            version: t,
                            callback: n,
                            parameter: r
                        })
                    }
                }
                e.stub = true;
                e.stubVersion = 2;

                function t(r) {
                    if (!window[n] || window[n].stub !== true) {
                        return
                    }
                    if (!r.data) {
                        return
                    }
                    var a = typeof r.data === "string";
                    var e;
                    try {
                        e = a ? JSON.parse(r.data) : r.data
                    } catch (t) {
                        return
                    }
                    if (e[o]) {
                        var i = e[o];
                        window[n](i.command, i.version, function(e, t) {
                            var n = {};
                            n[s] = {
                                returnValue: e,
                                success: t,
                                callId: i.callId
                            };
                            r.source.postMessage(a ? JSON.stringify(n) : n, "*")
                        }, i.parameter)
                    }
                }
                if (typeof window[n] !== "function") {
                    window[n] = e;
                    if (window.addEventListener) {
                        window.addEventListener("message", t, false)
                    } else {
                        window.attachEvent("onmessage", t)
                    }
                }
            }
            e("__tcfapi", "__tcfapiBuffer", "__tcfapiCall", "__tcfapiReturn");
            r("__tcfapiLocator");
            (function(e) {
                var t = document.createElement("link");
                t.rel = "preload";
                t.as = "script";
                var n = document.createElement("script");
                n.id = "spcloader";
                n.type = "text/javascript";
                n["async"] = true;
                n.charset = "utf-8";
                var r = "https://sdk.privacy-center.org/" + e + "/loader.js?target=" + document.location.hostname;
                t.href = r;
                n.src = r;
                var a = document.getElementsByTagName("script")[0];
                a.parentNode.insertBefore(t, a);
                a.parentNode.insertBefore(n, a)
            })("7003cf3a-cec4-4a86-83e4-2211a3d133a8")
        })();
    </script>

    <title>Home | Luxembourg Business Registers</title>

    <meta content="initial-scale=1.0, width=device-width" name="viewport" />
    <meta name="google-site-verification" content="VsURJHltjleCBSQvdT5SabQvY_InV4_N1CCibx8gFk0" />
    <meta name="facebook-domain-verification" content="coacjtiljpyjtnbzrxzeoc5i65n5li" />
    <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
    <meta
        content="The Italian Business Register, the public register which collects official data and documents relating italian individual businessmen and commercial companies."
        lang="en-US" name="description" />


    <script
    type="importmap">{"imports":{"react-dom":"/o/frontend-js-react-web/__liferay__/exports/react-dom.js","@clayui/breadcrumb":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$breadcrumb.js","@clayui/form":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$form.js","@clayui/popover":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$popover.js","@clayui/charts":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$charts.js","@clayui/shared":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$shared.js","@clayui/localized-input":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$localized-input.js","@clayui/modal":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$modal.js","@clayui/empty-state":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$empty-state.js","react":"/o/frontend-js-react-web/__liferay__/exports/react.js","@clayui/navigation-bar":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$navigation-bar.js","@clayui/color-picker":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$color-picker.js","@clayui/pagination":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$pagination.js","@clayui/icon":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$icon.js","@clayui/table":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$table.js","@clayui/autocomplete":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$autocomplete.js","@clayui/slider":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$slider.js","@clayui/management-toolbar":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$management-toolbar.js","@clayui/multi-select":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$multi-select.js","@clayui/nav":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$nav.js","@clayui/time-picker":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$time-picker.js","@clayui/provider":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$provider.js","@clayui/upper-toolbar":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$upper-toolbar.js","@clayui/panel":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$panel.js","@clayui/loading-indicator":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$loading-indicator.js","@clayui/list":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$list.js","@clayui/drop-down":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$drop-down.js","@clayui/date-picker":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$date-picker.js","@clayui/label":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$label.js","@clayui/data-provider":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$data-provider.js","@liferay/frontend-js-api/data-set":"/o/frontend-js-dependencies-web/__liferay__/exports/@liferay$js-api$data-set.js","@clayui/core":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$core.js","@clayui/pagination-bar":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$pagination-bar.js","@clayui/layout":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$layout.js","@clayui/multi-step-nav":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$multi-step-nav.js","@liferay/frontend-js-api":"/o/frontend-js-dependencies-web/__liferay__/exports/@liferay$js-api.js","@clayui/toolbar":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$toolbar.js","@clayui/css":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$css.js","@clayui/badge":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$badge.js","@clayui/alert":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$alert.js","@clayui/link":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$link.js","@clayui/card":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$card.js","@clayui/progress-bar":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$progress-bar.js","@clayui/tooltip":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$tooltip.js","@clayui/button":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$button.js","@clayui/tabs":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$tabs.js","@clayui/sticker":"/o/frontend-taglib-clay/__liferay__/exports/@clayui$sticker.js"},"scopes":{}}</script>
    <script data-senna-track="temporary">
        var Liferay = window.Liferay || {};
        Liferay.Icons = Liferay.Icons || {};
        Liferay.Icons.controlPanelSpritemap = 'https://italianbusinessregister.it/o/admin-theme/images/clay/icons.svg';
        Liferay.Icons.spritemap = 'https://italianbusinessregister.it/o/PortaleInternazionale-theme/images/clay/icons.svg';
    </script>
    <script data-senna-track="permanent" type="text/javascript">
        window.Liferay = window.Liferay || {};
        window.Liferay.CSP = {
            nonce: ''
        };
    </script>
    <link data-senna-track="temporary" href="index.html" rel="canonical" />
    <link data-senna-track="temporary" href="https://italianbusinessregister.it/es/" hreflang="es-ES" rel="alternate" />
    <link data-senna-track="temporary" href="https://italianbusinessregister.it/fr/" hreflang="fr-FR" rel="alternate" />
    <link data-senna-track="temporary" href="index.html" hreflang="en-US" rel="alternate" />
    <link data-senna-track="temporary" href="https://italianbusinessregister.it/de/" hreflang="de-DE" rel="alternate" />
    <link data-senna-track="temporary" href="index.html" hreflang="x-default" rel="alternate" />

    <link class="lfr-css-file" data-senna-track="temporary"
        href="../o/PortaleInternazionale-theme/css/clay1ee7.css?browserId=other&amp;themeId=PortaleInternazionale_WAR_PortaleInternazionaletheme&amp;languageId=en_US&amp;t=1762412978000"
        id="liferayAUICSS" rel="stylesheet" type="text/css" />
    <link
        href="../o/journal-content-web/css/main68f8.css?browserId=other&amp;themeId=PortaleInternazionale_WAR_PortaleInternazionaletheme&amp;languageId=en_US&amp;t=1697901894000"
        rel="stylesheet" type="text/css" data-senna-track="temporary" id="2bde6ec3" />
    <link
        href="../o/portal-search-web/css/maincceb.css?browserId=other&amp;themeId=PortaleInternazionale_WAR_PortaleInternazionaletheme&amp;languageId=en_US&amp;t=1697897468000"
        rel="stylesheet" type="text/css" data-senna-track="temporary" id="c42c7316" />
    <link
        href="../o/product-navigation-product-menu-web/css/main6da6.css?browserId=other&amp;themeId=PortaleInternazionale_WAR_PortaleInternazionaletheme&amp;languageId=en_US&amp;t=1696816862000"
        rel="stylesheet" type="text/css" data-senna-track="temporary" id="e937f211" />
    <link
        href="../o/com.liferay.product.navigation.user.personal.bar.web/css/main76ee.css?browserId=other&amp;themeId=PortaleInternazionale_WAR_PortaleInternazionaletheme&amp;languageId=en_US&amp;t=1692920928000"
        rel="stylesheet" type="text/css" data-senna-track="temporary" id="134516af" />
    <link
        href="../o/site-navigation-menu-web/css/mainb257.css?browserId=other&amp;themeId=PortaleInternazionale_WAR_PortaleInternazionaletheme&amp;languageId=en_US&amp;t=1697894976000"
        rel="stylesheet" type="text/css" data-senna-track="temporary" id="d4a40d74" />
    <link
        href="../o/mydocuments/css/main9db2.css?browserId=other&amp;themeId=PortaleInternazionale_WAR_PortaleInternazionaletheme&amp;languageId=en_US&amp;t=1725884660000"
        rel="stylesheet" type="text/css" data-senna-track="temporary" id="205fbb8" />
    <link
        href="../o/mysearches/css/maina7ba.css?browserId=other&amp;themeId=PortaleInternazionale_WAR_PortaleInternazionaletheme&amp;languageId=en_US&amp;t=1721043664000"
        rel="stylesheet" type="text/css" data-senna-track="temporary" id="af1dd7e9" />
    <link href="{{ asset('o/ricercaimprese/css/main6831.css') }}" rel="stylesheet" type="text/css"
        data-senna-track="temporary" id="ff75e81a" />

    <script data-senna-track="temporary" type="text/javascript">
        // <![CDATA[
        var Liferay = Liferay || {};

        Liferay.Browser = {
            acceptsGzip: function() {
                return true;
            },



            getMajorVersion: function() {
                return 0;
            },

            getRevision: function() {
                return '';
            },
            getVersion: function() {
                return '';
            },



            isAir: function() {
                return false;
            },
            isChrome: function() {
                return false;
            },
            isEdge: function() {
                return false;
            },
            isFirefox: function() {
                return false;
            },
            isGecko: function() {
                return false;
            },
            isIe: function() {
                return false;
            },
            isIphone: function() {
                return false;
            },
            isLinux: function() {
                return false;
            },
            isMac: function() {
                return false;
            },
            isMobile: function() {
                return false;
            },
            isMozilla: function() {
                return false;
            },
            isOpera: function() {
                return false;
            },
            isRtf: function() {
                return false;
            },
            isSafari: function() {
                return false;
            },
            isSun: function() {
                return false;
            },
            isWebKit: function() {
                return false;
            },
            isWindows: function() {
                return true;
            }
        };

        Liferay.Data = Liferay.Data || {};

        Liferay.Data.ICONS_INLINE_SVG = true;

        Liferay.Data.NAV_SELECTOR = '#navigation';

        Liferay.Data.NAV_SELECTOR_MOBILE = '#navigationCollapse';

        Liferay.Data.isCustomizationView = function() {
            return false;
        };

        Liferay.Data.notices = [

        ];

        (function() {
            var available = {};

            var direction = {};



            available['en_US'] = 'English\x20\x28United\x20States\x29';
            direction['en_US'] = 'ltr';



            available['de_DE'] = 'German\x20\x28Germany\x29';
            direction['de_DE'] = 'ltr';



            available['fr_FR'] = 'French\x20\x28France\x29';
            direction['fr_FR'] = 'ltr';



            available['es_ES'] = 'Spanish\x20\x28Spain\x29';
            direction['es_ES'] = 'ltr';



            Liferay.Language = {
                available,
                direction,
                get: function(key) {
                    return key;
                }
            };
        })();

        var featureFlags = {
            "LPS-195263": false,
            "LPS-157988": false,
            "COMMERCE-9410": false,
            "LPS-178642": false,
            "LPS-187284": false,
            "LPS-193005": false,
            "LPS-189187": false,
            "LPS-187285": false,
            "LRAC-10632": false,
            "COMMERCE-8087": false,
            "LPS-114786": false,
            "LRAC-10757": false,
            "LPS-197408": false,
            "LPS-180090": false,
            "LPS-170809": false,
            "LPS-178052": false,
            "LPS-189856": false,
            "LPS-187436": false,
            "LPS-182184": false,
            "LPS-185892": false,
            "LPS-186620": false,
            "LPS-157670": false,
            "LPS-159650": false,
            "COMMERCE-11026": false,
            "LPS-184404": false,
            "LPS-180328": false,
            "COMMERCE-11028": false,
            "LPS-169923": false,
            "LPS-198183": false,
            "LPS-171364": false,
            "COMMERCE-11181": false,
            "LPS-153714": false,
            "LPS-96845": false,
            "COMMERCE-10890": false,
            "LPS-170670": false,
            "LPS-169981": false,
            "LPS-177027": false,
            "LPS-172416": false,
            "LPS-163118": false,
            "LPS-135430": false,
            "LPS-180155": false,
            "LPS-134060": false,
            "LPS-164563": false,
            "LPS-122920": false,
            "LPS-148856": false,
            "LPS-173135": false,
            "LPS-194395": false,
            "COMMERCE-9599": false,
            "LPS-187142": false,
            "LPS-195205": false,
            "LPS-187183": false,
            "LPS-197307": false,
            "LPS-187854": false,
            "LPS-165346": false,
            "LPS-144527": false,
            "COMMERCE-8949": false,
            "LPS-153813": false,
            "LPS-147671": false,
            "LPS-149256": false,
            "LPS-165482": false,
            "COMMERCE-11287": false,
            "LPS-196420": false,
            "LPS-193551": false,
            "LPS-174816": false,
            "LPS-186360": false,
            "LPS-153332": false,
            "LPS-179669": false,
            "LPS-174417": false,
            "LPS-183882": false,
            "LPS-155284": false,
            "LPS-186558": false,
            "LPS-158675": false,
            "LPS-159643": false,
            "LPS-181663": false,
            "LPS-179035": false,
            "LPS-164948": false,
            "LPS-161033": false,
            "LPS-184255": false,
            "LPS-188058": false,
            "LPS-129412": false,
            "LPS-183727": false,
            "LPS-166126": false,
            "LPS-182512": false,
            "LPS-169837": false,
            "LPS-180855": false
        };

        Liferay.FeatureFlags = Object.keys(featureFlags).reduce(
            (acc, key) => ({
                ...acc,
                [key]: featureFlags[key] === 'true' || featureFlags[key] === true
            }), {}
        );

        Liferay.PortletKeys = {
            DOCUMENT_LIBRARY: 'com_liferay_document_library_web_portlet_DLPortlet',
            DYNAMIC_DATA_MAPPING: 'com_liferay_dynamic_data_mapping_web_portlet_DDMPortlet',
            ITEM_SELECTOR: 'com_liferay_item_selector_web_portlet_ItemSelectorPortlet'
        };

        Liferay.PropsValues = {
            JAVASCRIPT_SINGLE_PAGE_APPLICATION_TIMEOUT: 0,
            UPLOAD_SERVLET_REQUEST_IMPL_MAX_SIZE: 104857600
        };

        Liferay.ThemeDisplay = {




            getLayoutId: function() {
                return '1';
            },



            getLayoutRelativeControlPanelURL: function() {
                return '/en/group/guest/~/control_panel/manage';
            },

            getLayoutRelativeURL: function() {
                return '/en/home';
            },
            getLayoutURL: function() {
                return 'https://italianbusinessregister.it/en/home';
            },
            getParentLayoutId: function() {
                return '0';
            },
            isControlPanel: function() {
                return false;
            },
            isPrivateLayout: function() {
                return 'false';
            },
            isVirtualLayout: function() {
                return false;
            },


            getBCP47LanguageId: function() {
                return 'en-US';
            },
            getCanonicalURL: function() {



                return 'https\x3a\x2f\x2fitalianbusinessregister\x2eit\x2fen\x2f';
            },
            getCDNBaseURL: function() {
                return 'https://italianbusinessregister.it';
            },
            getCDNDynamicResourcesHost: function() {
                return '';
            },
            getCDNHost: function() {
                return '';
            },
            getCompanyGroupId: function() {
                return '20197';
            },
            getCompanyId: function() {
                return '20157';
            },
            getDefaultLanguageId: function() {
                return 'en_US';
            },
            getDoAsUserIdEncoded: function() {
                return '';
            },
            getLanguageId: function() {
                return 'en_US';
            },
            getParentGroupId: function() {
                return '20184';
            },
            getPathContext: function() {
                return '';
            },
            getPathImage: function() {
                return '/image';
            },
            getPathJavaScript: function() {
                return '/o/frontend-js-web';
            },
            getPathMain: function() {
                return '/en/c';
            },
            getPathThemeImages: function() {
                return 'https://italianbusinessregister.it/o/PortaleInternazionale-theme/images';
            },
            getPathThemeRoot: function() {
                return '/o/PortaleInternazionale-theme';
            },
            getPlid: function() {
                return '20187';
            },
            getPortalURL: function() {
                return 'https://italianbusinessregister.it';
            },
            getRealUserId: function() {
                return '20161';
            },
            getRemoteAddr: function() {
                return '102.90.79.169';
            },
            getRemoteHost: function() {
                return '102.90.79.169';
            },
            getScopeGroupId: function() {
                return '20184';
            },
            getScopeGroupIdOrLiveGroupId: function() {
                return '20184';
            },
            getSessionId: function() {
                return '';
            },
            getSiteAdminURL: function() {
                return 'https://italianbusinessregister.it/group/guest/~/control_panel/manage?p_p_lifecycle=0&p_p_state=maximized&p_p_mode=view';
            },
            getSiteGroupId: function() {
                return '20184';
            },
            getURLControlPanel: function() {
                return '/en/group/control_panel?refererPlid=20187';
            },
            getURLHome: function() {
                return 'https\x3a\x2f\x2fitalianbusinessregister\x2eit\x2fweb\x2fguest\x2fhome';
            },
            getUserEmailAddress: function() {
                return '';
            },
            getUserId: function() {
                return '20161';
            },
            getUserName: function() {
                return '';
            },
            isAddSessionIdToURL: function() {
                return false;
            },
            isImpersonated: function() {
                return false;
            },
            isSignedIn: function() {
                return false;
            },

            isStagedPortlet: function() {


                return false;


            },

            isStateExclusive: function() {
                return false;
            },
            isStateMaximized: function() {
                return false;
            },
            isStatePopUp: function() {
                return false;
            }
        };

        var themeDisplay = Liferay.ThemeDisplay;

        Liferay.AUI = {



            getCombine: function() {
                return true;
            },
            getComboPath: function() {
                return '/combo/?browserId=other&minifierType=&languageId=en_US&t=1762418678778&';
            },
            getDateFormat: function() {
                return '%m/%d/%Y';
            },
            getEditorCKEditorPath: function() {
                return '/o/frontend-editor-ckeditor-web';
            },
            getFilter: function() {
                var filter = 'raw';



                filter = 'min';



                return filter;
            },
            getFilterConfig: function() {
                var instance = this;

                var filterConfig = null;

                if (!instance.getCombine()) {
                    filterConfig = {
                        replaceStr: '.js' + instance.getStaticResourceURLParams(),
                        searchExp: '\\.js$'
                    };
                }

                return filterConfig;
            },
            getJavaScriptRootPath: function() {
                return '/o/frontend-js-web';
            },
            getPortletRootPath: function() {
                return '/html/portlet';
            },
            getStaticResourceURLParams: function() {
                return '?browserId=other&minifierType=&languageId=en_US&t=1762418678778';
            }
        };

        Liferay.authToken = 'NPUkCZYW';



        Liferay.currentURL = '\x2fen\x2f';
        Liferay.currentURLEncoded = '\x252Fen\x252F';
        // ]]>
    </script>

    <script data-senna-track="temporary" type="text/javascript">
        window.__CONFIG__ = {
            basePath: '',
            combine: true,
            defaultURLParams: null,
            explainResolutions: false,
            exposeGlobal: false,
            logLevel: 'warn',
            moduleType: 'module',
            namespace: 'Liferay',
            nonce: '',
            reportMismatchedAnonymousModules: 'warn',
            resolvePath: '/o/js_resolve_modules',
            url: '/combo/?browserId=other&minifierType=js&languageId=en_US&t=1762418678778&',
            waitTimeout: 60000
        };
    </script>
    <script data-senna-track="permanent"
        src="../o/frontend-js-loader-modules-extender/loadera473.js?&amp;mac=9WaMmhziBCkScHZwrrVcOR7VZF4=&amp;browserId=other&amp;languageId=en_US&amp;minifierType=js"
        type="text/javascript"></script>
    <script data-senna-track="permanent"
        src="/combo?browserId=other&minifierType=js&languageId=en_US&t=1762418678778&/o/frontend-js-aui-web/aui/aui/aui-min.js&/o/frontend-js-aui-web/liferay/modules.js&/o/frontend-js-aui-web/liferay/aui_sandbox.js&/o/frontend-js-aui-web/aui/attribute-base/attribute-base-min.js&/o/frontend-js-aui-web/aui/attribute-complex/attribute-complex-min.js&/o/frontend-js-aui-web/aui/attribute-core/attribute-core-min.js&/o/frontend-js-aui-web/aui/attribute-observable/attribute-observable-min.js&/o/frontend-js-aui-web/aui/attribute-extras/attribute-extras-min.js&/o/frontend-js-aui-web/aui/event-custom-base/event-custom-base-min.js&/o/frontend-js-aui-web/aui/event-custom-complex/event-custom-complex-min.js&/o/frontend-js-aui-web/aui/oop/oop-min.js&/o/frontend-js-aui-web/aui/aui-base-lang/aui-base-lang-min.js&/o/frontend-js-aui-web/liferay/dependency.js&/o/frontend-js-aui-web/liferay/util.js&/o/oauth2-provider-web/js/liferay.js&/o/frontend-js-web/liferay/dom_task_runner.js&/o/frontend-js-web/liferay/events.js&/o/frontend-js-web/liferay/lazy_load.js&/o/frontend-js-web/liferay/liferay.js&/o/frontend-js-web/liferay/global.bundle.js&/o/frontend-js-web/liferay/portlet.js&/o/frontend-js-web/liferay/workflow.js"
        type="text/javascript"></script>
    <script data-senna-track="temporary" type="text/javascript">
        window.Liferay = Liferay || {};
        window.Liferay.OAuth2 = {
            getAuthorizeURL: function() {
                return 'https://italianbusinessregister.it/o/oauth2/authorize';
            },
            getBuiltInRedirectURL: function() {
                return 'https://italianbusinessregister.it/o/oauth2/redirect';
            },
            getIntrospectURL: function() {
                return 'https://italianbusinessregister.it/o/oauth2/introspect';
            },
            getTokenURL: function() {
                return 'https://italianbusinessregister.it/o/oauth2/token';
            },
            getUserAgentApplication: function(externalReferenceCode) {
                return Liferay.OAuth2._userAgentApplications[externalReferenceCode];
            },
            _userAgentApplications: {}
        }
    </script>
    <script data-senna-track="temporary" type="text/javascript">
        try {
            var MODULE_MAIN = 'staging-processes-web@5.0.52/index';
            var MODULE_PATH = '/o/staging-processes-web';
            AUI().applyConfig({
                groups: {
                    stagingprocessesweb: {
                        base: MODULE_PATH + "/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-staging-processes-export-import": {
                                path: "js/main.js",
                                requires: ["aui-datatype", "aui-dialog-iframe-deprecated", "aui-modal",
                                    "aui-parse-content", "aui-toggler", "liferay-portlet-base",
                                    "liferay-util-window"
                                ]
                            }
                        },
                        root: MODULE_PATH + "/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'staging-taglib@8.0.0/index';
            var MODULE_PATH = '/o/staging-taglib';
            AUI().applyConfig({
                groups: {
                    stagingTaglib: {
                        base: MODULE_PATH + "/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-export-import-management-bar-button": {
                                path: "export_import_entity_management_bar_button/js/main.js",
                                requires: ["aui-component", "liferay-search-container",
                                    "liferay-search-container-select"
                                ]
                            }
                        },
                        root: MODULE_PATH + "/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'exportimport-web@5.0.79/index';
            var MODULE_PATH = '/o/exportimport-web';
            AUI().applyConfig({
                groups: {
                    exportimportweb: {
                        base: MODULE_PATH + "/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-export-import-export-import": {
                                path: "js/main.js",
                                requires: ["aui-datatype", "aui-dialog-iframe-deprecated", "aui-modal",
                                    "aui-parse-content", "aui-toggler", "liferay-portlet-base",
                                    "liferay-util-window"
                                ]
                            }
                        },
                        root: MODULE_PATH + "/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'portal-search-web@6.0.119/index';
            var MODULE_PATH = '/o/portal-search-web';
            AUI().applyConfig({
                groups: {
                    search: {
                        base: MODULE_PATH + "/js/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-search-custom-filter": {
                                path: "custom_filter.js",
                                requires: []
                            },
                            "liferay-search-facet-util": {
                                path: "facet_util.js",
                                requires: []
                            },
                            "liferay-search-modified-facet": {
                                path: "modified_facet.js",
                                requires: ["aui-form-validator", "liferay-search-facet-util"]
                            },
                            "liferay-search-modified-facet-configuration": {
                                path: "modified_facet_configuration.js",
                                requires: ["aui-node"]
                            },
                            "liferay-search-sort-configuration": {
                                path: "sort_configuration.js",
                                requires: ["aui-node"]
                            },
                            "liferay-search-sort-util": {
                                path: "sort_util.js",
                                requires: []
                            }
                        },
                        root: MODULE_PATH + "/js/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = '@liferay/frontend-taglib@13.0.0/index';
            var MODULE_PATH = '/o/frontend-taglib';
            AUI().applyConfig({
                groups: {
                    "frontend-taglib": {
                        base: MODULE_PATH + "/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-management-bar": {
                                path: "management_bar/js/management_bar.js",
                                requires: ["aui-component", "liferay-portlet-base"]
                            },
                            "liferay-sidebar-panel": {
                                path: "sidebar_panel/js/sidebar_panel.js",
                                requires: ["aui-base", "aui-debounce", "aui-parse-content", "liferay-portlet-base"]
                            }
                        },
                        root: MODULE_PATH + "/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = '@liferay/frontend-js-state-web@1.0.18/index';
            var MODULE_PATH = '/o/frontend-js-state-web';
            AUI().applyConfig({
                groups: {
                    state: {
                        mainModule: MODULE_MAIN
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = '@liferay/frontend-js-react-web@5.0.31/index';
            var MODULE_PATH = '/o/frontend-js-react-web';
            AUI().applyConfig({
                groups: {
                    react: {
                        mainModule: MODULE_MAIN
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'frontend-js-components-web@2.0.57/index';
            var MODULE_PATH = '/o/frontend-js-components-web';
            AUI().applyConfig({
                groups: {
                    components: {
                        mainModule: MODULE_MAIN
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'frontend-editor-alloyeditor-web@5.0.42/index';
            var MODULE_PATH = '/o/frontend-editor-alloyeditor-web';
            AUI().applyConfig({
                groups: {
                    alloyeditor: {
                        base: MODULE_PATH + "/js/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-alloy-editor": {
                                path: "alloyeditor.js",
                                requires: ["aui-component", "liferay-portlet-base", "timers"]
                            },
                            "liferay-alloy-editor-source": {
                                path: "alloyeditor_source.js",
                                requires: ["aui-debounce", "liferay-fullscreen-source-editor",
                                    "liferay-source-editor", "plugin"
                                ]
                            }
                        },
                        root: MODULE_PATH + "/js/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'contacts-web@5.0.53/index';
            var MODULE_PATH = '/o/contacts-web';
            AUI().applyConfig({
                groups: {
                    contactscenter: {
                        base: MODULE_PATH + "/js/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-contacts-center": {
                                path: "main.js",
                                requires: ["aui-io-plugin-deprecated", "aui-toolbar", "autocomplete-base",
                                    "datasource-io", "json-parse", "liferay-portlet-base", "liferay-util-window"
                                ]
                            }
                        },
                        root: MODULE_PATH + "/js/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'portal-workflow-task-web@5.0.63/index';
            var MODULE_PATH = '/o/portal-workflow-task-web';
            AUI().applyConfig({
                groups: {
                    workflowtasks: {
                        base: MODULE_PATH + "/js/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-workflow-tasks": {
                                path: "main.js",
                                requires: ["liferay-util-window"]
                            }
                        },
                        root: MODULE_PATH + "/js/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'dynamic-data-mapping-web@5.0.96/index';
            var MODULE_PATH = '/o/dynamic-data-mapping-web';
            ! function() {
                const a = Liferay.AUI;
                AUI().applyConfig({
                    groups: {
                        ddm: {
                            base: MODULE_PATH + "/js/",
                            combine: Liferay.AUI.getCombine(),
                            filter: a.getFilterConfig(),
                            modules: {
                                "liferay-ddm-form": {
                                    path: "ddm_form.js",
                                    requires: ["aui-base", "aui-datatable", "aui-datatype", "aui-image-viewer",
                                        "aui-parse-content", "aui-set", "aui-sortable-list", "json",
                                        "liferay-form", "liferay-map-base", "liferay-translation-manager",
                                        "liferay-util-window"
                                    ]
                                },
                                "liferay-portlet-dynamic-data-mapping": {
                                    condition: {
                                        trigger: "liferay-document-library"
                                    },
                                    path: "main.js",
                                    requires: ["arraysort", "aui-form-builder-deprecated", "aui-form-validator",
                                        "aui-map", "aui-text-unicode", "json", "liferay-menu",
                                        "liferay-translation-manager", "liferay-util-window", "text"
                                    ]
                                },
                                "liferay-portlet-dynamic-data-mapping-custom-fields": {
                                    condition: {
                                        trigger: "liferay-document-library"
                                    },
                                    path: "custom_fields.js",
                                    requires: ["liferay-portlet-dynamic-data-mapping"]
                                }
                            },
                            root: MODULE_PATH + "/js/"
                        }
                    }
                })
            }();
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'calendar-web@5.0.81/index';
            var MODULE_PATH = '/o/calendar-web';
            AUI().applyConfig({
                groups: {
                    calendar: {
                        base: MODULE_PATH + "/js/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-calendar-a11y": {
                                path: "calendar_a11y.js",
                                requires: ["calendar"]
                            },
                            "liferay-calendar-container": {
                                path: "calendar_container.js",
                                requires: ["aui-alert", "aui-base", "aui-component", "liferay-portlet-base"]
                            },
                            "liferay-calendar-date-picker-sanitizer": {
                                path: "date_picker_sanitizer.js",
                                requires: ["aui-base"]
                            },
                            "liferay-calendar-interval-selector": {
                                path: "interval_selector.js",
                                requires: ["aui-base", "liferay-portlet-base"]
                            },
                            "liferay-calendar-interval-selector-scheduler-event-link": {
                                path: "interval_selector_scheduler_event_link.js",
                                requires: ["aui-base", "liferay-portlet-base"]
                            },
                            "liferay-calendar-list": {
                                path: "calendar_list.js",
                                requires: ["aui-template-deprecated", "liferay-scheduler"]
                            },
                            "liferay-calendar-message-util": {
                                path: "message_util.js",
                                requires: ["liferay-util-window"]
                            },
                            "liferay-calendar-recurrence-converter": {
                                path: "recurrence_converter.js",
                                requires: []
                            },
                            "liferay-calendar-recurrence-dialog": {
                                path: "recurrence.js",
                                requires: ["aui-base", "liferay-calendar-recurrence-util"]
                            },
                            "liferay-calendar-recurrence-util": {
                                path: "recurrence_util.js",
                                requires: ["aui-base", "liferay-util-window"]
                            },
                            "liferay-calendar-reminders": {
                                path: "calendar_reminders.js",
                                requires: ["aui-base"]
                            },
                            "liferay-calendar-remote-services": {
                                path: "remote_services.js",
                                requires: ["aui-base", "aui-component", "liferay-calendar-util",
                                    "liferay-portlet-base"
                                ]
                            },
                            "liferay-calendar-session-listener": {
                                path: "session_listener.js",
                                requires: ["aui-base", "liferay-scheduler"]
                            },
                            "liferay-calendar-simple-color-picker": {
                                path: "simple_color_picker.js",
                                requires: ["aui-base", "aui-template-deprecated"]
                            },
                            "liferay-calendar-simple-menu": {
                                path: "simple_menu.js",
                                requires: ["aui-base", "aui-template-deprecated", "event-outside", "event-touch",
                                    "widget-modality", "widget-position", "widget-position-align",
                                    "widget-position-constrain", "widget-stack", "widget-stdmod"
                                ]
                            },
                            "liferay-calendar-util": {
                                path: "calendar_util.js",
                                requires: ["aui-datatype", "aui-io", "aui-scheduler", "aui-toolbar", "autocomplete",
                                    "autocomplete-highlighters"
                                ]
                            },
                            "liferay-scheduler": {
                                path: "scheduler.js",
                                requires: ["async-queue", "aui-datatype", "aui-scheduler", "dd-plugin",
                                    "liferay-calendar-a11y", "liferay-calendar-message-util",
                                    "liferay-calendar-recurrence-converter", "liferay-calendar-recurrence-util",
                                    "liferay-calendar-util", "liferay-scheduler-event-recorder",
                                    "liferay-scheduler-models", "promise", "resize-plugin"
                                ]
                            },
                            "liferay-scheduler-event-recorder": {
                                path: "scheduler_event_recorder.js",
                                requires: ["dd-plugin", "liferay-calendar-util", "resize-plugin"]
                            },
                            "liferay-scheduler-models": {
                                path: "scheduler_models.js",
                                requires: ["aui-datatype", "dd-plugin", "liferay-calendar-util"]
                            }
                        },
                        root: MODULE_PATH + "/js/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'item-selector-taglib@6.0.1/index.es';
            var MODULE_PATH = '/o/item-selector-taglib';
            AUI().applyConfig({
                groups: {
                    "item-selector-taglib": {
                        base: MODULE_PATH + "/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-image-selector": {
                                path: "image_selector/js/image_selector.js",
                                requires: ["aui-base", "liferay-item-selector-dialog", "liferay-portlet-base",
                                    "uploader"
                                ]
                            }
                        },
                        root: MODULE_PATH + "/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = 'invitation-invite-members-web@5.0.31/index';
            var MODULE_PATH = '/o/invitation-invite-members-web';
            AUI().applyConfig({
                groups: {
                    "invite-members": {
                        base: MODULE_PATH + "/invite_members/js/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "liferay-portlet-invite-members": {
                                path: "main.js",
                                requires: ["aui-base", "autocomplete-base", "datasource-io", "datatype-number",
                                    "liferay-portlet-base", "liferay-util-window", "node-core"
                                ]
                            }
                        },
                        root: MODULE_PATH + "/invite_members/js/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
        try {
            var MODULE_MAIN = '@liferay/document-library-web@6.0.169/document_library/js/index';
            var MODULE_PATH = '/o/document-library-web';
            AUI().applyConfig({
                groups: {
                    dl: {
                        base: MODULE_PATH + "/document_library/js/legacy/",
                        combine: Liferay.AUI.getCombine(),
                        filter: Liferay.AUI.getFilterConfig(),
                        modules: {
                            "document-library-upload-component": {
                                path: "DocumentLibraryUpload.js",
                                requires: ["aui-component", "aui-data-set-deprecated",
                                    "aui-overlay-manager-deprecated", "aui-overlay-mask-deprecated",
                                    "aui-parse-content", "aui-progressbar", "aui-template-deprecated",
                                    "liferay-search-container", "querystring-parse-simple", "uploader"
                                ]
                            }
                        },
                        root: MODULE_PATH + "/document_library/js/legacy/"
                    }
                }
            });
        } catch (error) {
            console.error(error);
        }
    </script>


    <script data-senna-track="temporary" type="text/javascript">
        // <![CDATA[
        // ]]>
    </script>

    <link class="lfr-css-file" data-senna-track="temporary"
        href="../o/PortaleInternazionale-theme/css/main1ee7.css?browserId=other&amp;themeId=PortaleInternazionale_WAR_PortaleInternazionaletheme&amp;languageId=en_US&amp;t=1762412978000"
        id="liferayThemeCSS" rel="stylesheet" type="text/css" />

    <style data-senna-track="temporary" type="text/css">
        .li_no_menu .dropdown-menu {
            min-width: 200px
        }
    </style>

    <style data-senna-track="temporary" type="text/css">
        #p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_5NhCpd1qi2hX_ .portlet-content {}

        #p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_U6uYUFUV4RXV_ .portlet-content {}

        #p_p_id_ricercaimprese_WAR_ricercaPIportlet_ .portlet-content {}
    </style>

    <script data-senna-track="temporary">
        var Liferay = window.Liferay || {};
        Liferay.CommerceContext = {
            "commerceAccountGroupIds": [],
            "accountEntryAllowedTypes": ["person"],
            "commerceChannelId": "0",
            "currency": {
                "currencyId": "9270322",
                "currencyCode": "USD"
            },
            "showSeparateOrderItems": false,
            "commerceSiteType": 0
        };
    </script>
    <link href="../o/commerce-frontend-js/styles/main.css" rel="stylesheet" type="text/css" />
    <style data-senna-track="temporary" type="text/css">
    </style>
    <script>
        Liferay.Loader.require(
            '@liferay/frontend-js-state-web@1.0.18',
            function(FrontendJsState) {
                try {} catch (err) {
                    console.error(err);
                }
            });
    </script>
    <script>
        Liferay.Loader.require(
            'frontend-js-spa-web@5.0.42/init',
            function(frontendJsSpaWebInit) {
                try {
                    (function() {
                        frontendJsSpaWebInit.default({
                            "navigationExceptionSelectors": ":not([target=\"_blank\"]):not([data-senna-off]):not([data-resource-href]):not([data-cke-saved-href]):not([data-cke-saved-href])",
                            "cacheExpirationTime": -1,
                            "clearScreensCache": false,
                            "portletsBlacklist": [
                                "com_liferay_nested_portlets_web_portlet_NestedPortletsPortlet",
                                "com_liferay_site_navigation_directory_web_portlet_SitesDirectoryPortlet",
                                "com_liferay_questions_web_internal_portlet_QuestionsPortlet",
                                "com_liferay_account_admin_web_internal_portlet_AccountUsersRegistrationPortlet",
                                "com_liferay_portal_language_override_web_internal_portlet_PLOPortlet"
                            ],
                            "validStatusCodes": [221, 490, 494, 499, 491, 492, 493, 495, 220],
                            "debugEnabled": false,
                            "loginRedirect": "",
                            "excludedPaths": ["/c/document_library", "/documents", "/image"],
                            "userNotification": {
                                "message": "It looks like this is taking longer than expected.",
                                "title": "Oops",
                                "timeout": 30000
                            },
                            "requestTimeout": 0
                        })
                    })();
                } catch (err) {
                    console.error(err);
                }
            });
    </script>

    <script data-senna-track="temporary" type="text/javascript">
        if (window.Analytics) {
            window._com_liferay_document_library_analytics_isViewFileEntry = false;
        }
    </script>

    <script type="text/javascript">
        Liferay.on(
            'ddmFieldBlur',
            function(event) {
                if (window.Analytics) {
                    Analytics.send(
                        'fieldBlurred',
                        'Form', {
                            fieldName: event.fieldName,
                            focusDuration: event.focusDuration,
                            formId: event.formId,
                            formPageTitle: event.formPageTitle,
                            page: event.page,
                            title: event.title
                        }
                    );
                }
            }
        );

        Liferay.on(
            'ddmFieldFocus',
            function(event) {
                if (window.Analytics) {
                    Analytics.send(
                        'fieldFocused',
                        'Form', {
                            fieldName: event.fieldName,
                            formId: event.formId,
                            formPageTitle: event.formPageTitle,
                            page: event.page,
                            title: event.title
                        }
                    );
                }
            }
        );

        Liferay.on(
            'ddmFormPageShow',
            function(event) {
                if (window.Analytics) {
                    Analytics.send(
                        'pageViewed',
                        'Form', {
                            formId: event.formId,
                            formPageTitle: event.formPageTitle,
                            page: event.page,
                            title: event.title
                        }
                    );
                }
            }
        );

        Liferay.on(
            'ddmFormSubmit',
            function(event) {
                if (window.Analytics) {
                    Analytics.send(
                        'formSubmitted',
                        'Form', {
                            formId: event.formId,
                            title: event.title
                        }
                    );
                }
            }
        );

        Liferay.on(
            'ddmFormView',
            function(event) {
                if (window.Analytics) {
                    Analytics.send(
                        'formViewed',
                        'Form', {
                            formId: event.formId,
                            title: event.title
                        }
                    );
                }
            }
        );
    </script>
    <script></script>


    <script src="../o/PortaleInternazionale-theme/js/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $.noConflict();
    </script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/affix.js"></script>

    <script src="../o/PortaleInternazionale-theme/js/plugins/jquery.mmenu.all.min.js"></script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/scrollspy.js"></script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/blockUI.js"></script>

    <script src="../o/PortaleInternazionale-theme/js/jquery/jquery-ui.min.js"></script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/ui.datepicker-en.js"></script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/spin.min.js"></script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/owl.carousel.min.js"></script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/jquery.cookie.js"></script>

    <script src="../o/PortaleInternazionale-theme/js/plugins/jquery.collapser.min.js"></script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/bootstrap.min.js"></script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/jquery.trunk8.min.js"></script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/moment.js"></script>
    <script src="../o/PortaleInternazionale-theme/js/plugins/imageMapResizer.min.js"></script>

    <script
        src="../o/PortaleInternazionale-theme/js/main2ca2.js?browserId=other&amp;minifierType=js&amp;languageId=en_US&amp;t=1762412978000">
    </script>

    <!-- importing fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

    <link rel="stylesheet"
        href="../o/PortaleInternazionale-theme/css/main1ee7.css?browserId=other&amp;themeId=PortaleInternazionale_WAR_PortaleInternazionaletheme&amp;languageId=en_US&amp;t=1762412978000" />

    <link rel="stylesheet" href="../o/PortaleInternazionale-theme/css/font-awesome.min.css" />

    <link rel="icon" type="image/svg+xml" href="{{ asset('o/PortaleInternazionale-theme/images/favicon.svg') }}">

    <script>
        AUI().use('node', 'event', 'event-custom', 'aui-dialog', 'liferay-portlet-url', 'aui-popover', 'aui-modal',
            function(A) {

                window.getAvailableList = function() {
                    Liferay.Service(
                        '/pi.recuperadocumentori/get-available-list', {
                            userId: '20161'
                        },
                        function() {
                            updateCartItemNumber();
                        }
                    );
                }


                window.updateCartItemNumber = function() {
                    Liferay.Service(
                        '/pi.expenses/get-my-items-number', {
                            userId: '20161'
                        },
                        function(num) {
                            var cart = A.all(".num-carrello-badge");
                            if (num > 0) {

                                cart.html(num);
                                cart.show();

                            } else {
                                cart.html("");
                                cart.hide();
                            }
                        }
                    );
                }

                console.log('non loggato');

            });
    </script>
    <script>
        jQuery(document).on('scroll', function() {
            var top = jQuery(this).scrollTop();
            var header = jQuery('.rowWithMenu');
            if (top > 58) {
                header.addClass('sticky');
            } else {
                header.removeClass('sticky');
            }
        });
    </script>

</head>

<body class=" yui3-skin-sam controls-visible signed-out public-page site" data-spy="scroll" data-target=".fixedMenu">

    <input type="hidden" id="isChina" value="false" />

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "../../connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div>
        <div id="contentInfoCookie" class="contentInfoCookie row-fluid" style="display: none;">
            <div id="infoCookie" class="span12 text-center">
                <div id="infoCookieText" class="span12">
                    <div class="span12 bodyDivCookie">
                        <span class="color-red cookies-title">We care about your privacy</span></br></br>
                        <span class="color-red cookies-body">This site requires the installation of technical cookies
                            (necessary for
                            the site to function), anonymized analytical cookies and third-party profiling cookies to
                            help us analyze
                            the use of our portal and to send you suggestions in line with your preferences. By clicking
                            on "<b>I
                                agree</b>" you will give your consent to the use of the profiling cookies indicated in
                            the cookie
                            policy. By clicking on "<b>Only technical cookies</b>" you will prevent the installation of
                            profiling
                            cookies and you can continue browsing with only <b>anonymized analytical cookies</b> and
                            technical
                            cookies. </span>
                    </div>
                    <div class="span4 anchorCookie">
                        <a href="#"
                            onclick="window.open('https://italianbusinessregister.it/legal-policy','Legal Policy','resizable=yes,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=yes,dependent=no,width=1000,height=800');">
                            <b>Learn more </b>
                        </a>
                    </div>
                    <div class="span5" style="text-align:left;">
                        <input
                            style="background-color: white;background-image: none;color:  #c33 ;box-shadow: none;border-color: #c33;"
                            type="button" class="btn refuseCookie" value="Only technical cookies"></input>
                    </div>
                    <div class="span3" style="text-align:left;">
                        <input style="width: 100% !important;" type="button" class="btn btn-primary accettaCookie"
                            value="I agree"></input>
                    </div>
                </div>
            </div>
        </div>


        <div class="header navbar navbar-static-top navbar-main navbar-mobile visibility-mobile-menu">
            <div class="navbar-inner py-2" style="position:relative">
                <a class="btn-resp-menu" href="#resp-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu">
                        <path d="M4 5h16" />
                        <path d="M4 12h16" />
                        <path d="M4 19h16" />
                    </svg>
                    <span class="ui-helper-hidden-accessible">toggle-menu</span>
                </a>
                <a href='/' style="margin-left: -2.5rem;"
                    onclick="blockScreen(); dataLayer.push({'event':'clickheader', 'action': 'Logo'})">
                    <img class="logoMobileGrande"
                        src="{{ asset('o/PortaleInternazionale-theme/images/ri/logo_positive-fd71f19c.png') }}"
                        alt="italianbusinessregister">
                    <img class="logoMobilePiccolo"
                        src="{{ asset('o/PortaleInternazionale-theme/images/ri/logo_positive-fd71f19c.png') }}"
                        alt="italianbusinessregister" style="display:none">
                </a>
            </div>
        </div>

        <div class="row-fluid visibility-desktop-menu rowWithMenu">
            <div class="span4 spanBrand">
                <a class="brand" href='/'>
                    <img class="brandGrande"
                        src="{{ asset('o/PortaleInternazionale-theme/images/ri/logo_positive-fd71f19c.png') }}"
                        alt="italianbusinessregister">
                    <img class="brandPiccolo"
                        src="{{ asset('o/PortaleInternazionale-theme/images/ri/logo_positive-fd71f19c.png') }}"
                        alt="italianbusinessregister" style="display:none">
                </a>
            </div>
            <div class="span8 spanMyElem">
                <div class="dropdown" style="margin-right: 20px">
                    <b style="margin-right: 16px"><a class="hoverdecoration-red" href='/#about'
                            onclick="blockScreen(); dataLayer.push({'event':'clickheader', 'action': 'Assistenza'})">
                            About </a></b>
                </div>
                <div class="dropdown" style="margin-right: 20px">
                    <b style="margin-right: 16px"><a class="hoverdecoration-red" href='{{ route('contact') }}'
                            onclick="blockScreen(); dataLayer.push({'event':'clickheader', 'action': 'Assistenza'})">
                            Support </a></b>
                </div>
                <div class="dropdown" style="margin-right: 20px">
                    <b style="margin-right: 16px"><a class="hoverdecoration-red" href='{{ route('searchCompany') }}'
                            onclick="blockScreen(); dataLayer.push({'event':'clickheader', 'action': 'Assistenza'})">
                            Search Company </a></b>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="wrapper">
            <div id="content">

                <style type="text/css">
                    .master-layout-fragment .portlet-header {
                        display: none;
                    }
                </style>

                <div class="rilayoutbase" id="main-content" role="main">
                    <div class="portlet-layout row-fluid row-intest">

                        <div class="portlet-column row-fluid width70auto" id="column-2">
                            <div class="portlet-dropzone portlet-column-content portlet-column-content-only"
                                id="layout-column_column-2">

                                <div class="portlet-boundary portlet-boundary_ricercaimprese_WAR_ricercaPIportlet_  portlet-static portlet-static-end portlet-borderless  "
                                    id="p_p_id_ricercaimprese_WAR_ricercaPIportlet_">
                                    <span id="p_ricercaimprese_WAR_ricercaPIportlet"></span>

                                    <section class="portlet" id="portlet_ricercaimprese_WAR_ricercaPIportlet">

                                        <div class="portlet-content">

                                            <div class="autofit-float autofit-row portlet-header">

                                                <div class="autofit-col autofit-col-expand">
                                                    <h5 class="portlet-title-text">PI - Ricerca Imprese Gratuita</h5>
                                                </div>

                                            </div>

                                            <div class=" portlet-content-container">

                                                <div class="portlet-body">

                                                    <link rel="stylesheet"
                                                        href="../o/ricercaimprese/css/homePage.css" />


                                                    <script src="../../www.google.com/recaptcha/enterprise4481.js?render=6LfKBJ4qAAAAAKvP_8mDvmi8kDPBRDk6bYU8aCAe" async
                                                        defer></script>






                                                    <div class="widthHomePage">


                                                        <div class="row-fluid rowTitleImage ">
                                                            <h1>
                                                                <div class="span11 spanTitleImage">
                                                                    Luxembourg Business Registers
                                                                </div>
                                                            </h1>

                                                            <div class="span12"
                                                                style="margin-left: 0 !important; color: rgb(82, 82, 82);">
                                                                <span style="font-size:22px;"><b>The
                                                                        official website dedicated to the procedures for
                                                                        companies and associations with the
                                                                        RCS, RBE and RESA</b></span>
                                                            </div>

                                                        </div>



                                                        <form action="{{ route('search') }}" class="form marginTop20"
                                                            method="post" style="margin-bottom:0" id="searchForm">
                                                            @csrf
                                                            <div class="boxCompany ">

                                                                <div class="span12"
                                                                    style="margin-left:auto;min-height: 0;">

                                                                    <div
                                                                        class="span12 spanPopupRicerca rowPopupRicerca">
                                                                        <div class="row-fluid marginTop10">
                                                                            @if (session()->has('error'))
                                                                                <div style="padding-bottom: 1rem;">
                                                                                    <div class="alert alert-danger">
                                                                                        {{ session('error') }}
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            <div class=""
                                                                                style="text-align: center;">
                                                                                <label class="labelTextField "
                                                                                    for="inputSearchField">
                                                                                    <b>Search for information about a
                                                                                        company or association</b>
                                                                                </label>
                                                                                <span>
                                                                                    <input id="inputSearchField"
                                                                                        name="query" type="text"
                                                                                        class="inputFiltroRicerca inputFiltroRicercaPopup width100 inputWithDeleteBlack"
                                                                                        style="border-radius: 10px ; font-size: 10pt !important; font-family: 'Roboto-Regular',sans-serif; height: 35px !important"
                                                                                        placeholder="Enter company name or Reg number"
                                                                                        autocomplete="off"
                                                                                        tabindex="0" />

                                                                                </span>
                                                                            </div>
                                                                            <div style="margin-left: 0 !important;"
                                                                                class="text-center spanBtnSearch">
                                                                                <label
                                                                                    class="hidden-phone hidden-tablet">&nbsp;</label>

                                                                                <button id="btnSearchHomePage"
                                                                                    type="submit"
                                                                                    class="btn btn-primary buttonCerca btnSearchHomePage btnHomePage width100">
                                                                                    Search
                                                                                </button>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </section>











                                </div>






                            </div>
                        </div>
                        <div class="greyRowLayout">
                            <div id="layer"></div>
                        </div>


                    </div>
                    <div class="portlet-layout row-fluid row-content">

                        <div class="portlet-column row-fluid width70auto">
                            <div class="row-fluid" id="column-3">
                                <div class="span12">
                                    <div class="portlet-dropzone portlet-column-content portlet-column-content-only"
                                        id="layout-column_column-3">





































                                        <div class="portlet-boundary portlet-boundary_com_liferay_journal_content_web_portlet_JournalContentPortlet_  portlet-static portlet-static-end portlet-borderless portlet-journal-content "
                                            id="p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_U6uYUFUV4RXV_">
                                            <span
                                                id="p_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_U6uYUFUV4RXV"></span>













































                                            <section class="portlet"
                                                id="portlet_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_U6uYUFUV4RXV">


                                                <div class="portlet-content">

                                                    <div class="autofit-float autofit-row portlet-header">

                                                        <div class="autofit-col autofit-col-expand">
                                                            <h5 class="portlet-title-text">pulsantoni home page</h5>
                                                        </div>

                                                        <div class="autofit-col autofit-col-end">
                                                            <div class="autofit-section">
                                                                <div class="visible-interaction">




                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class=" portlet-content-container">



                                                        <div class="portlet-body">



















































































































                                                            <div class=""
                                                                data-fragments-editor-item-id="20109-90533"
                                                                data-fragments-editor-item-type="fragments-editor-mapped-item">




























                                                                <div class="journal-content-article "
                                                                    data-analytics-asset-id="90531"
                                                                    data-analytics-asset-title="pulsantoni home page"
                                                                    data-analytics-asset-type="web-content">


                                                                    <div class="row-fluid widthHomePage">
                                                                        <div class="span4 spanPulsanteHP text-center">
                                                                            <div class="row-fluid">
                                                                                <div class="span12">
                                                                                    <a class="linkPulsanti">
                                                                                        <div
                                                                                            class="row-fluid marginTop20">
                                                                                            <div class="span12">
                                                                                                <img src="https://italianbusinessregister.it/documents/20184/90449/company+profile.svg/fb2be0f0-f060-400d-b51d-d519a669b67a"
                                                                                                    alt="Company Report"
                                                                                                    class="imgPulsante" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="row-fluid rowTitoloPulsante">
                                                                                            <div
                                                                                                class="span12 spanTitoloPulsante">
                                                                                                Company Report
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="span4 spanPulsanteHP text-center">
                                                                            <div class="row-fluid">
                                                                                <div class="span12">
                                                                                    <a class="linkPulsanti">
                                                                                        <div
                                                                                            class="row-fluid marginTop20">
                                                                                            <div class="span12">
                                                                                                <img src="https://italianbusinessregister.it/documents/20184/90449/annual+account.svg/6af26cd5-549b-4704-bcac-13ceb86153f4"
                                                                                                    alt="Annual Accounts"
                                                                                                    class="imgPulsante" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="row-fluid rowTitoloPulsante">
                                                                                            <div
                                                                                                class="span12 spanTitoloPulsante">
                                                                                                Annual Accounts
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="span4 spanPulsanteHP text-center">
                                                                            <div class="row-fluid">
                                                                                <div class="span12">
                                                                                    <a class="linkPulsanti">
                                                                                        <div
                                                                                            class="row-fluid marginTop20">
                                                                                            <div class="span12">
                                                                                                <img src="https://italianbusinessregister.it/documents/20184/90449/company+dossier.svg/7716bf6f-131a-4b44-b932-ac1391aa3082"
                                                                                                    alt="Lists of Companies"
                                                                                                    class="imgPulsante" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="row-fluid rowTitoloPulsante">
                                                                                            <div
                                                                                                class="span12 spanTitoloPulsante">
                                                                                                Lists of Companies
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <style>
                                                                        .spanPulsanteHP {
                                                                            background: #092650;
                                                                            color: white;
                                                                            font-size: 20px;
                                                                        }

                                                                        .imgPulsante {
                                                                            width: 90px;
                                                                            height: 90px !important
                                                                        }

                                                                        .linkPulsanti {
                                                                            color: white !important
                                                                        }

                                                                        .spanTitoloPulsante {
                                                                            font-size: 25px;
                                                                            font-weight: bold;
                                                                        }

                                                                        .rowTitoloPulsante {
                                                                            margin-top: 20px
                                                                        }

                                                                        @media(max-width:979px) {
                                                                            .spanPulsanteHP {
                                                                                margin-top: 20px
                                                                            }
                                                                        }
                                                                    </style>


                                                                </div>







                                                            </div>
































                                                        </div>

                                                    </div>

                                                </div>
                                            </section>











                                        </div>






                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="portlet-layout row-fluid row-info">

                        <div class="portlet-column row-fluid width70auto">
                            <div class="row-fluid" id="column-4">
                                <div class="span12">
                                    <div class="portlet-dropzone portlet-column-content portlet-column-content-only"
                                        id="layout-column_column-4">





































                                        <div class="portlet-boundary portlet-boundary_com_liferay_journal_content_web_portlet_JournalContentPortlet_  portlet-static portlet-static-end portlet-borderless portlet-journal-content "
                                            id="p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_5NhCpd1qi2hX_">
                                            <span
                                                id="p_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_5NhCpd1qi2hX"></span>













































                                            <section class="portlet"
                                                id="portlet_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_5NhCpd1qi2hX">


                                                <div class="portlet-content">

                                                    <div class="autofit-float autofit-row portlet-header">

                                                        <div class="autofit-col autofit-col-expand">
                                                            <h5 class="portlet-title-text">hp</h5>
                                                        </div>

                                                        <div class="autofit-col autofit-col-end">
                                                            <div class="autofit-section">
                                                                <div class="visible-interaction">




                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div id="about" class=" portlet-content-container">
                                                        <div class="portlet-body">
                                                            <div class=""
                                                                data-fragments-editor-item-id="20109-676418"
                                                                data-fragments-editor-item-type="fragments-editor-mapped-item">
                                                                <div class="journal-content-article "
                                                                    data-analytics-asset-id="676416"
                                                                    data-analytics-asset-title="hp"
                                                                    data-analytics-asset-type="web-content">
                                                                    <div class="row-fluid width70auto">
                                                                        <div class="span12">
                                                                            <div class="row-fluid"
                                                                                style="text-align: center;">
                                                                                <div class="span12"
                                                                                    style="color: rgb(82, 82, 82);">
                                                                                    <span style="font-size:22px;"><b>Welcome
                                                                                            to the website of LUXEMBOURG
                                                                                            BUSINESS
                                                                                            REGISTERS.</b></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row-fluid"
                                                                                style="text-align: center;">
                                                                                <div class="span12"
                                                                                    style="color: rgb(82, 82, 82);">
                                                                                    <span
                                                                                        style="font-size:18px;line-height: 21px;">
                                                                                        LUXEMBOURG BUSINESS REGISTERS
                                                                                        (LBR) is an economic interest
                                                                                        grouping established by the
                                                                                        State, the Chamber of Commerce
                                                                                        (Chambre de Commerce) and the
                                                                                        Chamber of Crafts (Chambre des
                                                                                        Métiers) of the Grand Duchy of
                                                                                        Luxembourg. It's mission is to
                                                                                        manage and to develop the
                                                                                        different registers it may be
                                                                                        entrusted with by law, under the
                                                                                        authority of the Minister of
                                                                                        Justice.

                                                                                        Since 23 January 2003, LBR
                                                                                        ensures the management of the
                                                                                        Trade and Companies Register.

                                                                                        Since 1 June 2016, LBR is in
                                                                                        charge of the electronic central
                                                                                        platform of official
                                                                                        publications concerning
                                                                                        companies and associations, the
                                                                                        "Recueil électronique des
                                                                                        sociétés et associations"
                                                                                        (RESA).

                                                                                        The law of 13th of January 2019
                                                                                        entrusted the LBR with the
                                                                                        management of the Register of
                                                                                        Beneficial Owners.
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <style type="text/css">
                                                                        .rwd-video {
                                                                            height: 0;
                                                                            overflow: hidden;
                                                                            padding-top: 30px;
                                                                            margin-bottom: 30px;
                                                                            position: relative;
                                                                            padding-bottom: 25%
                                                                        }

                                                                        .rwd-video iframe,
                                                                        .rwd-video object,
                                                                        .rwd-video embed {
                                                                            height: 100%;
                                                                            left: 0;
                                                                            position: absolute;
                                                                            top: 0;
                                                                            width: 100%;
                                                                        }

                                                                        @media(max-width:979px) {
                                                                            .rwd-video {
                                                                                padding-bottom: 50%
                                                                            }
                                                                        }
                                                                    </style>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </section>

                                        </div>












































                                        <div class="portlet-boundary portlet-boundary_com_liferay_journal_content_web_portlet_JournalContentPortlet_  portlet-static portlet-static-end portlet-decorate portlet-journal-content "
                                            id="p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_RYBVtPIRqLNq_">
                                            <span
                                                id="p_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_RYBVtPIRqLNq"></span>













































                                            <section class="portlet"
                                                id="portlet_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_RYBVtPIRqLNq">


                                                <div class="portlet-content">

                                                    <div class="autofit-float autofit-row portlet-header">

                                                        <div class="autofit-col autofit-col-expand">
                                                            <h5 class="portlet-title-text">banner_id_lei</h5>
                                                        </div>

                                                        <div class="autofit-col autofit-col-end">
                                                            <div class="autofit-section">
                                                                <div class="visible-interaction">




                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class=" portlet-content-container">



                                                        <div class="portlet-body">



















































































































                                                            <div class=""
                                                                data-fragments-editor-item-id="20109-9119919"
                                                                data-fragments-editor-item-type="fragments-editor-mapped-item">




























                                                                <div class="journal-content-article "
                                                                    data-analytics-asset-id="9119917"
                                                                    data-analytics-asset-title="banner_id_lei"
                                                                    data-analytics-asset-type="web-content">


                                                                    <style type="text/css">
                                                                        .d-flex {
                                                                            display: flex;
                                                                            flex-wrap: wrap;
                                                                        }

                                                                        .col1 {
                                                                            flex: 0.5;
                                                                        }

                                                                        .col2 {
                                                                            flex: 1;
                                                                        }

                                                                        .mt-2 {
                                                                            margin-top: 2rem !important;
                                                                        }

                                                                        .mt-5 {
                                                                            margin-top: 5rem !important;
                                                                        }

                                                                        .padding {
                                                                            padding: 2rem 5rem;
                                                                        }

                                                                        p {
                                                                            line-height: 25px !important;
                                                                        }

                                                                        .align-items-center {
                                                                            text-align: justify;
                                                                            align-content: center;
                                                                        }

                                                                        .justify-content-end {
                                                                            justify-content: end !important;
                                                                        }

                                                                        .border-blue {
                                                                            border: 1px solid #2769B5;
                                                                        }

                                                                        #banner_idLei {
                                                                            margin-left: -10vw;
                                                                            padding-left: 10vw;
                                                                            padding-right: 10vw;
                                                                            margin-right: -10vw;
                                                                        }

                                                                        .imgHeaderBusinessHomePage {
                                                                            width: 50%;
                                                                        }

                                                                        .text-white {
                                                                            color: white !important;
                                                                        }

                                                                        .textTitleArea {
                                                                            font-size: 1.8em;
                                                                            margin-bottom: 12px !important;
                                                                        }

                                                                        .btn-water-green,
                                                                        .btn-water-green:active,
                                                                        .btn-water-green:hover {
                                                                            display: inline-block;
                                                                            font-weight: 600;
                                                                            text-align: center;
                                                                            text-decoration: none !important;
                                                                            white-space: nowrap;
                                                                            vertical-align: middle;
                                                                            font-size: 1em;
                                                                            line-height: 35px;
                                                                            border-radius: 0;
                                                                            color: #3D6A6C !important;
                                                                            background-color: white;
                                                                            border: 2px solid #3D6A6C;
                                                                            width: 200px;
                                                                            cursor: pointer;
                                                                        }

                                                                        .btn-water-green:hover {
                                                                            background-color: #3D6A6C;
                                                                            color: white !important;
                                                                        }

                                                                        .btn-water-green:active {
                                                                            box-shadow: 0 0 5px -1px #666;
                                                                        }

                                                                        .home-page-id-lei-text {
                                                                            margin-right: -10vw;
                                                                            text-align: right;
                                                                            background-color: #30898D;
                                                                            clip-path: polygon(20% 0%, 100% 0%, 100% 100%, 20% 100%, 0% 50%);
                                                                        }

                                                                        @media (max-width : 992px) {
                                                                            .d-flex {
                                                                                display: inline;
                                                                            }

                                                                            .home-page-id-lei-text {
                                                                                margin-right: unset;
                                                                                padding-left: 3rem !important;
                                                                                padding-right: 3rem !important;
                                                                                text-align: center;
                                                                                clip-path: none !important;
                                                                            }

                                                                            .border-blue {
                                                                                border: none;
                                                                            }
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>











                                        </div>






                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer id="footer" role="contentinfo">
            <div class="row-fluid row-footer-navigation">
                <div class="spanCenterFooter span12">
                    <div class="row-fluid width70auto text-center" style="position: relative">
                        <div class="span6" style="position:relative; float: left;">
                            <a class="linkUC" href="/" target="_blank"><img alt=""
                                    src="{{ asset('o/PortaleInternazionale-theme/images/ri/logo_negative-fbe35a51.png') }}"
                                    class="uc"></img></a>
                        </div>
                    </div>
                    <hr style="margin-top: 3rem;" class="width70auto hrFooter" />
                    <div class="row-fluid width70auto">
                        <div class="span3">
                            <b><a class="linkWhite">Email: info@luxembourgregistrar.org</a></b>
                        </div>
                        <div class="span3">
                            <b><a class="linkWhite">Postal Address: Luxembourg Business Registers
                                    L-2961 Luxembourg</a></b>
                        </div>
                        <div class="span3" style="margin-top: 1rem;">
                            <b><a class="linkWhite" style="font-size: 16px;">Opening Hours</a></b>
                            <div>
                                <b><a class="linkWhite">Filing assistance desk</a></b><br>
                                <b><a class="linkWhite">From Monday to Friday</a></b><br>
                                <b><a class="linkWhite">From 09.00 until 12.00 and from 13.30 until 16.30</a></b><br>
                                <b><a class="linkWhite">Only upon appointment</a></b>
                            </div>
                            <div style="margin-top: 1rem;">
                                <b><a class="linkWhite">Helpdesk Service</a></b><br>
                                <b><a class="linkWhite">From Monday to Friday</a></b><br>
                                <b><a class="linkWhite">From 08.00 until 17.30</a></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <nav id="resp-menu">
            <ul class="nav menu-vers-tablet">
                <li>
                    <a href='/#about' class="itemMenuMobile landingMobile mobile hoverdecoration-red">
                        <b>About</b>
                    </a>
                </li>
                <li>
                    <a href='{{ route('contact') }}' class="itemMenuMobile landingMobile mobile hoverdecoration-red">
                        <b>Support</b>
                    </a>
                </li>
                <li>
                    <a href='{{ route('searchCompany') }}'
                        class="itemMenuMobile landingMobile mobile hoverdecoration-red">
                        <b>Search Company</b>
                    </a>
                </li>
            </ul>
        </nav>

        <script type="text/javascript"></script>
        <script></script>

        <script type="text/javascript">
            // <![CDATA[
            Liferay.currentURL = '\x2fen\x2f';
            Liferay.currentURLEncoded = '\x252Fen\x252F';

            // ]]>
        </script>

        <script type="text/javascript">
            // <![CDATA[

            // ]]>
        </script>

        <script type="text/javascript">
            (function() {
                var $ = AUI.$;
                var _ = AUI._;
                var onDestroyPortlet = function() {
                    Liferay.detach('messagePosted', onMessagePosted);
                    Liferay.detach('destroyPortlet', onDestroyPortlet);
                };

                Liferay.on('destroyPortlet', onDestroyPortlet);

                var onMessagePosted = function(event) {
                    if (window.Analytics) {
                        const eventProperties = {
                            className: event.className,
                            classPK: event.classPK,
                            commentId: event.commentId,
                            text: event.text,
                        };

                        const blogNode = document.querySelector(
                            '[data-analytics-asset-id="' + event.classPK + '"]'
                        );

                        const dmNode = document.querySelector(
                            '[data-analytics-file-entry-id="' + event.classPK + '"]'
                        );

                        if (blogNode) {
                            eventProperties.title = blogNode.dataset.analyticsAssetTitle;
                        } else if (dmNode) {
                            eventProperties.title = dmNode.dataset.analyticsFileEntryTitle;
                        }

                        Analytics.send('posted', 'Comment', eventProperties);
                    }
                };

                Liferay.on('messagePosted', onMessagePosted);
            })();

            function getValueByAttribute(node, attr) {
                return (
                    node.dataset[attr] ||
                    (node.parentElement && node.parentElement.dataset[attr])
                );
            }

            function sendAnalyticsEvent(anchor) {
                var fileEntryId = getValueByAttribute(anchor, 'analyticsFileEntryId');
                var title = getValueByAttribute(anchor, 'analyticsFileEntryTitle');
                var version = getValueByAttribute(anchor, 'analyticsFileEntryVersion');

                if (fileEntryId) {
                    Analytics.send('documentDownloaded', 'Document', {
                        groupId: themeDisplay.getScopeGroupId(),
                        fileEntryId,
                        preview: !!window._com_liferay_document_library_analytics_isViewFileEntry,
                        title,
                        version,
                    });
                }
            }

            function handleDownloadClick(event) {
                if (window.Analytics) {
                    if (event.target.nodeName.toLowerCase() === 'a') {
                        sendAnalyticsEvent(event.target);
                    } else if (
                        event.target.parentNode &&
                        event.target.parentNode.nodeName.toLowerCase() === 'a'
                    ) {
                        sendAnalyticsEvent(event.target.parentNode);
                    } else {
                        var target = event.target;
                        var matchTitle =
                            target.title && target.title.toLowerCase() === 'download';
                        var matchAction = target.action === 'download';
                        var matchLexiconIcon = !!target.querySelector(
                            '.lexicon-icon-download'
                        );
                        var matchLexiconClassName = target.classList.contains(
                            'lexicon-icon-download'
                        );
                        var matchParentTitle =
                            target.parentNode &&
                            target.parentNode.title &&
                            target.parentNode.title.toLowerCase() === 'download';
                        var matchParentLexiconClassName =
                            target.parentNode &&
                            target.parentNode.classList.contains('lexicon-icon-download');

                        if (
                            matchTitle ||
                            matchParentTitle ||
                            matchAction ||
                            matchLexiconIcon ||
                            matchLexiconClassName ||
                            matchParentLexiconClassName
                        ) {
                            var selectedFiles = document.querySelectorAll(
                                '.form .custom-control-input:checked'
                            );

                            selectedFiles.forEach(({
                                value
                            }) => {
                                var selectedFile = document.querySelector(
                                    '[data-analytics-file-entry-id="' + value + '"]'
                                );

                                sendAnalyticsEvent(selectedFile);
                            });
                        }
                    }
                }
            }

            Liferay.once('destroyPortlet', () => {
                document.body.removeEventListener('click', handleDownloadClick);
            });

            Liferay.once('portletReady', () => {
                document.body.addEventListener('click', handleDownloadClick);
            });

            (function() {
                var $ = AUI.$;
                var _ = AUI._;
                var onVote = function(event) {
                    if (window.Analytics) {
                        let title = event.contentTitle;

                        if (!title) {
                            const dmNode = document.querySelector(
                                '[data-analytics-file-entry-id="' + event.classPK + '"]'
                            );

                            if (dmNode) {
                                title = dmNode.dataset.analyticsFileEntryTitle;
                            }
                        }

                        Analytics.send('VOTE', 'Ratings', {
                            className: event.className,
                            classPK: event.classPK,
                            ratingType: event.ratingType,
                            score: event.score,
                            title,
                        });
                    }
                };

                var onDestroyPortlet = function() {
                    Liferay.detach('ratings:vote', onVote);
                    Liferay.detach('destroyPortlet', onDestroyPortlet);
                };

                Liferay.on('ratings:vote', onVote);
                Liferay.on('destroyPortlet', onDestroyPortlet);
            })();
            (function() {
                var $ = AUI.$;
                var _ = AUI._;
                var onShare = function(data) {
                    if (window.Analytics) {
                        Analytics.send('shared', 'SocialBookmarks', {
                            className: data.className,
                            classPK: data.classPK,
                            type: data.type,
                            url: data.url,
                        });
                    }
                };

                var onDestroyPortlet = function() {
                    Liferay.detach('socialBookmarks:share', onShare);
                    Liferay.detach('destroyPortlet', onDestroyPortlet);
                };

                Liferay.on('socialBookmarks:share', onShare);
                Liferay.on('destroyPortlet', onDestroyPortlet);
            })();

            if (window.svg4everybody && Liferay.Data.ICONS_INLINE_SVG) {
                svg4everybody({
                    polyfill: true,
                    validate: function(src, svg, use) {
                        return !src || !src.startsWith('#');
                    }
                });
            }



            Liferay.Portlet.register('com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_rLZEs3WxehpI');


            Liferay.Portlet.onLoad({
                canEditTitle: false,
                columnPos: 1,
                isStatic: 'end',
                namespacedId: 'p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_rLZEs3WxehpI_',
                portletId: 'com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_rLZEs3WxehpI',
                refreshURL: '\x2fen\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d20187\x26p_p_id\x3dcom_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_rLZEs3WxehpI\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-2\x26p_p_col_pos\x3d1\x26p_p_col_count\x3d2\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fen\x252F',
                refreshURLData: {}
            });



            Liferay.Portlet.register('ricercaimprese_WAR_ricercaPIportlet');


            Liferay.Portlet.onLoad({
                canEditTitle: false,
                columnPos: 0,
                isStatic: 'end',
                namespacedId: 'p_p_id_ricercaimprese_WAR_ricercaPIportlet_',
                portletId: 'ricercaimprese_WAR_ricercaPIportlet',
                refreshURL: '\x2fen\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d20187\x26p_p_id\x3dricercaimprese_WAR_ricercaPIportlet\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-2\x26p_p_col_pos\x3d0\x26p_p_col_count\x3d2\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fen\x252F',
                refreshURLData: {}
            });



            Liferay.Portlet.register('mylanguage_WAR_pimysearches');


            Liferay.Portlet.onLoad({
                canEditTitle: false,
                columnPos: 0,
                isStatic: 'end',
                namespacedId: 'p_p_id_mylanguage_WAR_pimysearches_',
                portletId: 'mylanguage_WAR_pimysearches',
                refreshURL: '\x2fen\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d20187\x26p_p_id\x3dmylanguage_WAR_pimysearches\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dnull\x26p_p_col_pos\x3dnull\x26p_p_col_count\x3dnull\x26p_p_static\x3d1\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fen\x252F',
                refreshURLData: {}
            });



            Liferay.Portlet.register('com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_U6uYUFUV4RXV');


            Liferay.Portlet.onLoad({
                canEditTitle: false,
                columnPos: 0,
                isStatic: 'end',
                namespacedId: 'p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_U6uYUFUV4RXV_',
                portletId: 'com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_U6uYUFUV4RXV',
                refreshURL: '\x2fen\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d20187\x26p_p_id\x3dcom_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_U6uYUFUV4RXV\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-3\x26p_p_col_pos\x3d0\x26p_p_col_count\x3d1\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fen\x252F',
                refreshURLData: {}
            });



            Liferay.Portlet.register('com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_5NhCpd1qi2hX');


            Liferay.Portlet.onLoad({
                canEditTitle: false,
                columnPos: 0,
                isStatic: 'end',
                namespacedId: 'p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_5NhCpd1qi2hX_',
                portletId: 'com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_5NhCpd1qi2hX',
                refreshURL: '\x2fen\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d20187\x26p_p_id\x3dcom_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_5NhCpd1qi2hX\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-4\x26p_p_col_pos\x3d0\x26p_p_col_count\x3d2\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fen\x252F',
                refreshURLData: {}
            });



            Liferay.Portlet.register('com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_RYBVtPIRqLNq');


            Liferay.Portlet.onLoad({
                canEditTitle: false,
                columnPos: 1,
                isStatic: 'end',
                namespacedId: 'p_p_id_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_RYBVtPIRqLNq_',
                portletId: 'com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_RYBVtPIRqLNq',
                refreshURL: '\x2fen\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d20187\x26p_p_id\x3dcom_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_RYBVtPIRqLNq\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-4\x26p_p_col_pos\x3d1\x26p_p_col_count\x3d2\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fen\x252F',
                refreshURLData: {}
            });
        </script>
        <script>
            Liferay.Loader.require(
                'frontend-js-web/index',
                'layout-taglib@16.1.3/render_layout_structure/js/InfoItemActionHandler',
                function(frontendJsWeb, InfoItemActionHandler) {
                    try {
                        AUI().use(
                            'liferay-menu',
                            'liferay-form',
                            function(A) {
                                (function() {
                                    Liferay.component('infoItemActionComponent', new InfoItemActionHandler.default({
                                        "executeInfoItemActionURL": "https:\/\/italianbusinessregister.it\/en\/c\/portal\/execute_info_item_action?p_l_mode=view&plid=20187",
                                        "namespace": "",
                                        "spritemap": "https:\/\/italianbusinessregister.it\/o\/PortaleInternazionale-theme\/images\/clay\/icons.svg"
                                    }), {
                                        destroyOnNavigate: true,
                                        portletId: ''
                                    });
                                })();
                                (function() {
                                    var $ = AUI.$;
                                    var _ = AUI._;
                                    var {
                                        delegate
                                    } = frontendJsWeb;

                                    delegate(
                                        document,
                                        'focusin',
                                        '.portlet',
                                        function(event) {
                                            event.delegateTarget.closest('.portlet').classList.add('open');
                                        }
                                    );

                                    delegate(
                                        document,
                                        'focusout',
                                        '.portlet',
                                        function(event) {
                                            event.delegateTarget.closest('.portlet').classList.remove('open');
                                        }
                                    );
                                })();
                                (function() {
                                    var $ = AUI.$;
                                    var _ = AUI._;
                                    new Liferay.Menu();

                                    var liferayNotices = Liferay.Data.notices;

                                    for (var i = 0; i < liferayNotices.length; i++) {
                                        Liferay.Util.openToast(liferayNotices[i]);
                                    }

                                })();
                                (function() {
                                    var $ = AUI.$;
                                    var _ = AUI._;
                                    var {
                                        openToast
                                    } = frontendJsWeb;

                                    AUI().use(
                                        'liferay-session',
                                        function() {
                                            Liferay.Session = new Liferay.SessionBase({
                                                autoExtend: true,
                                                redirectOnExpire: false,
                                                redirectUrl: 'https\x3a\x2f\x2fitalianbusinessregister\x2eit\x2fweb\x2fguest\x2fhome',
                                                sessionLength: 900,
                                                sessionTimeoutOffset: 70,
                                                warningLength: 60
                                            });


                                        }
                                    );

                                })();
                                (function() {
                                    var $ = AUI.$;
                                    var _ = AUI._;
                                    Liferay.Form.register({
                                        id: '_ricercaimprese_WAR_ricercaPIportlet_searchForm'


                                            ,
                                        fieldRules: [



                                            ]




                                            ,
                                        validateOnBlur: true
                                    });

                                    var onDestroyPortlet = function(event) {
                                        if (event.portletId === 'ricercaimprese_WAR_ricercaPIportlet') {
                                            delete Liferay.Form._INSTANCES[
                                                '_ricercaimprese_WAR_ricercaPIportlet_searchForm'];
                                        }
                                    };

                                    Liferay.on('destroyPortlet', onDestroyPortlet);



                                    Liferay.fire(
                                        '_ricercaimprese_WAR_ricercaPIportlet_formReady', {
                                            formName: '_ricercaimprese_WAR_ricercaPIportlet_searchForm'
                                        }
                                    );
                                })();
                            });
                    } catch (err) {
                        console.error(err);
                    }
                });
        </script>









        <script
            src="../o/PortaleInternazionale-theme/js/main2ca2.js?browserId=other&amp;minifierType=js&amp;languageId=en_US&amp;t=1762412978000"
            type="text/javascript"></script>




        <script>
            Liferay.Loader.require(
                'frontend-js-collapse-support-web@2.0.17/index',
                function(CollapseProvider) {
                    try {
                        (function() {
                            CollapseProvider.default()
                        })();
                    } catch (err) {
                        console.error(err);
                    }
                });
        </script>
        <script>
            Liferay.Loader.require(
                'frontend-js-dropdown-support-web@2.0.13/index',
                function(DropdownProvider) {
                    try {
                        (function() {
                            DropdownProvider.default()
                        })();
                    } catch (err) {
                        console.error(err);
                    }
                });
        </script>
        <script type="text/javascript">
            Liferay.CustomDialogs = {
                enabled: false
            };
        </script>
        <script></script>
        <script>
            Liferay.Loader.require(
                'frontend-js-tooltip-support-web@4.0.22/index',
                function(TooltipSupport) {
                    try {
                        (function() {
                            TooltipSupport.default()
                        })();
                    } catch (err) {
                        console.error(err);
                    }
                });
        </script>
        <script>
            Liferay.Loader.require(
                'frontend-js-alert-support-web@2.0.12/index',
                function(AlertProvider) {
                    try {
                        (function() {
                            AlertProvider.default()
                        })();
                    } catch (err) {
                        console.error(err);
                    }
                });
        </script>
        <script>
            Liferay.Loader.require(
                'frontend-js-tabs-support-web@2.0.14/index',
                function(TabsProvider) {
                    try {
                        (function() {
                            TabsProvider.default()
                        })();
                    } catch (err) {
                        console.error(err);
                    }
                });
        </script>
        <div id="modalLogin" class="modal modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="background-color:white;">
            <div class="modal-header">
                <button type="button" class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
                <h3 id="myModalLabel" class="text-center"><b class="color-red">My Account</b></h3>
            </div>
            <div class="modal-body">

                <div class="row-fluid marginTop10">
                    <div class="span12">
                        <b>Fisrt Name:</b>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <b>Last Name:</b>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span12">
                        <b>Username/Mail address:</b> default@liferay.com
                    </div>
                </div>

                <div class="row-fluid marginTop10">
                    <div class="span12">
                        View <a href="https://italianbusinessregister.it/term-and-conditions-use"
                            target="_blank">Terms of Use</a>
                        and the<br><a href="https://italianbusinessregister.it/term-and-conditions-use#privacy"
                            target="_blank">Information pursuant to art. 13 of EU Regulation No. 2016/679</a> </div>
                </div>



                <hr style="color:#eee" />
                <div class="row-fluid">
                    <div class="span12 text-center">
                        <a href="https://italianbusinessregister.it/c/portal/logout" color-light-grey">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function updatePrivacy(priv) {
                Liferay.Service(
                    '/pi.utentepife/get-and-update-privacy', {
                        userId: 20161,
                        privacyValue: "1" == priv,
                        privacyName: "persData"
                    },
                    function(obj) {
                        if (obj == "OK") {
                            jQuery(".spanEsitoPriv").html("<i>Privacy Consent successfully update.</i>");
                        } else {
                            jQuery(".spanEsitoPriv").html("<i>Error in operation. Please try again.</i>");
                        }
                    }
                );
            }
        </script>

    </div>

</body>

</html>
