/*
 * Project:      wpwBot jQuery Plugin
 * Description:  wpwBot AI based Chatting functionality are handled .
 * Author:       QuantumCloud
 * Version:      1.0
 */
(function($) {

    /*
     * Global variable as object will beused to handle
     * wpwbot chatting initialize, tree change transfer,
     * changing tree steps and cookies etc.
     */
    var globalwpw={
        initialize:0,
        settings:{},
        wildCard:0,
        wildcards:'',
        wildcardsHelp:['start','support','reset', 'search', 'email'],
        productStep:'asking',
        orderStep:'welcome',
        supportStep:'welcome',
		formStep: 'welcome',
        formfieldid:'',
        formid:'',
        formentry:0,
        hasNameCookie:$.cookie("shopper"),
        shopperUserName:'',
        shopperEmail:'',
        shopperMessage:'',
        emptymsghandler:0,
        repeatQueryEmpty:'',
        wpwIsWorking:0,
        ai_step:0,
        df_status_lock:0,
		counter:0

    };
    /*
     * wpwbot welcome section coverd
     * greeting for new and already visited shopper
     * based the memory after asking thier name.
     */

    var wpwWelcome={
        greeting:function () {
            //Very begining greeting.
            if(globalwpw.settings.obj.re_target_handler==0){
            var botJoinMsg="<strong>"+globalwpw.settings.obj.agent+" </strong> "+wpwKits.randomMsg(globalwpw.settings.obj.agent_join);
            wpwMsg.single(botJoinMsg);
            }
            //Showing greeting for name in cookie or fresh shopper.
            setTimeout(function(){
                var firstMsg=wpwKits.randomMsg(globalwpw.settings.obj.hi_there)+' '+wpwKits.randomMsg(globalwpw.settings.obj.welcome)+" <strong>"+globalwpw.settings.obj.host+"!</strong> ";
                var secondMsg=wpwKits.randomMsg(globalwpw.settings.obj.asking_name);
				
                wpwMsg.double(firstMsg,secondMsg);
            }, globalwpw.settings.preLoadingTime*2);
        }
    };
    //Append the message to the message container based on the requirement.
    var wpwMsg={
        single:function (msg) {
			
            globalwpw.wpwIsWorking=1;
            $(globalwpw.settings.messageContainer).append(wpwKits.botPreloader());
            //Scroll to the last message
            wpwKits.scrollTo();
            setTimeout(function(){
                $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').html(msg);
                //If has youtube link then show video
                wpwKits.videohandler();
                //scroll to the last message
                wpwKits.scrollTo();
                //Enable the editor
                wpwKits.enableEditor(wpwKits.randomMsg(globalwpw.settings.obj.send_a_msg));
                //keeping in history
                wpwKits.wpwHistorySave();
            }, globalwpw.settings.preLoadingTime);

        },

        single_nobg:function (msg) {
			
            globalwpw.wpwIsWorking=1;
            $(globalwpw.settings.messageContainer).append(wpwKits.botPreloader());
            //Scroll to the last message
            wpwKits.scrollTo();
            setTimeout(function(){
                $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').parent().addClass('wp-chatbot-msg-flat').html(msg);
                //scroll to the last message
                wpwKits.scrollTo();
                //Enable the editor
                wpwKits.enableEditor(wpwKits.randomMsg(globalwpw.settings.obj.send_a_msg));
                //Keeping the chat history in localStorage
                wpwKits.wpwHistorySave();
                // disabled editor
                // wpwKits.disableEditor('Please choose an option.');
            }, globalwpw.settings.preLoadingTime);
        },

        double:function (fristMsg,secondMsg) {
            globalwpw.wpwIsWorking=1;
            $(globalwpw.settings.messageContainer).append(wpwKits.botPreloader());
            //Scroll to the last message
            wpwKits.scrollTo();
            setTimeout(function(){
                $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').html(fristMsg);
                //Second Message with interval
                $(globalwpw.settings.messageContainer).append(wpwKits.botPreloader());
                //Scroll to the last message
                wpwKits.scrollTo();
                setTimeout(function(){
					
                    $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').html(secondMsg);
                    //Scroll to the last message
                    wpwKits.scrollTo();
                    //Enable the editor
                    wpwKits.enableEditor(wpwKits.randomMsg(globalwpw.settings.obj.send_a_msg));
                    //keeping in history
                    wpwKits.wpwHistorySave();
                }, globalwpw.settings.preLoadingTime*2);

            }, globalwpw.settings.preLoadingTime);

        },
        double_nobg:function (fristMsg,secondMsg) {
            globalwpw.wpwIsWorking=1;
            $(globalwpw.settings.messageContainer).append(wpwKits.botPreloader());
            //Scroll to the last message
            wpwKits.scrollTo();
            setTimeout(function(){
                $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').html(fristMsg);
                //Second Message with interval
                $(globalwpw.settings.messageContainer).append(wpwKits.botPreloader());
                //Scroll to the last message
                wpwKits.scrollTo();
                setTimeout(function(){
                    if(globalwpw.wildCard>0){
                        $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').parent().addClass('wp-chatbot-msg-flat').html(secondMsg).append('<span class="qcld-chatbot-wildcard"  data-wildcart="back">' + wpwKits.randomMsg(globalwpw.settings.obj.back_to_start) + '</span>');
                    }else{
                        $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').parent().addClass('wp-chatbot-msg-flat').html(secondMsg);
                    }
                    //scroll to the last message
                    wpwKits.scrollTo();
                    //Enable the editor
                    if(globalwpw.wildCard==1 && globalwpw.supportStep=='welcome'){
                        //wpwKits.disableEditor('Support');
						wpwKits.enableEditor(wpwKits.randomMsg(globalwpw.settings.obj.send_a_msg));
                    }else{
                        wpwKits.enableEditor(wpwKits.randomMsg(globalwpw.settings.obj.send_a_msg));
                    }
                    //keeping in history
                    wpwKits.wpwHistorySave();
                    // disabled editor
                    // wpwKits.disableEditor('Please choose an option.');
                }, globalwpw.settings.preLoadingTime*2);

            }, globalwpw.settings.preLoadingTime);

        },
		triple_nobg:function (fristMsg,secondMsg,thirdMsg) {
			globalwpw.wpwIsWorking=1;
            $(globalwpw.settings.messageContainer).append(wpwKits.botPreloader());
            //Scroll to the last message
            wpwKits.scrollTo();
            setTimeout(function(){
                
                $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').html(fristMsg);
                wpwKits.videohandler();
                //Second Message with interval
                if($(globalwpw.settings.messageLastChild+' .wp-chatbot-comment-loader').length==0){
                    $(globalwpw.settings.messageContainer).append(wpwKits.botPreloader());
                }
                //Scroll to the last message
                wpwKits.scrollTo();

                setTimeout(function(){

                    $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').html(secondMsg);
                    wpwKits.videohandler();
                    if($(globalwpw.settings.messageLastChild+' .wp-chatbot-comment-loader').length==0){
                        $(globalwpw.settings.messageContainer).append(wpwKits.botPreloader());
                    }
                    //Scroll to the last message
                    wpwKits.scrollTo();


                    setTimeout(function(){


                        if(globalwpw.wildCard>0){
                            $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').parent().addClass('wp-chatbot-msg-flat').html(thirdMsg).append('<span class="qcld-chatbot-wildcard qcld_back_to_start"  data-wildcart="back">' + wpwKits.randomMsg(globalwpw.settings.obj.back_to_start) + '</span>');
                        }else{
                            $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').parent().addClass('wp-chatbot-msg-flat').html(thirdMsg);
                        }
                        //scroll to the last message
                        wpwKits.scrollTo();
                        wpwKits.videohandler();
                        //Enable the editor
                        if(globalwpw.wildCard==1 && globalwpw.supportStep=='welcome'){
                            //wpwKits.disableEditor('Support');
                        }else{
                            wpwKits.enableEditor(wpwKits.randomMsg(globalwpw.settings.obj.send_a_msg));
                        }
                        //keeping in history
                        wpwKits.wpwHistorySave();
                        // disabled editor
                        // wpwKits.disableEditor('Please choose an option.');
                    }, globalwpw.settings.preLoadingTime);

                }, globalwpw.settings.preLoadingTime);

                

            }, globalwpw.settings.preLoadingTime);

        },
        shopper:function (shopperMsg) {
            $(globalwpw.settings.messageContainer).append(wpwKits.shopperMsgDom(shopperMsg));
            //scroll to the last message
            wpwKits.scrollTo();
            //keeping in history
            wpwKits.wpwHistorySave();
        },
        shopper_choice:function (shopperChoice) {
            $(globalwpw.settings.messageLastChild).fadeOut(globalwpw.settings.preLoadingTime);
            $(globalwpw.settings.messageContainer).append(wpwKits.shopperMsgDom(shopperChoice));
            //scroll to the last message
            wpwKits.scrollTo();
            //keeping in history
            wpwKits.wpwHistorySave();
        }

    };

    //Every tiny tools are implemented  in wpwKits as object literal.
    var wpwKits={
        enableEditor:function(placeHolder){

            if(globalwpw.settings.editor_handler==0){
				if($(window).width()>380){
                    $("#wp-chatbot-editor").attr('disabled',false).focus();
                }else{
					$("#wp-chatbot-editor").attr('disabled',false)
				}
                $("#wp-chatbot-editor").attr('placeholder',placeHolder);
                $("#wp-chatbot-send-message").attr('disabled',false);
            }
        },
        disableEditor:function (placeHolder) {
            if(globalwpw.settings.editor_handler==0){
                $("#wp-chatbot-editor").attr('placeholder',placeHolder);
                $("#wp-chatbot-editor").attr('disabled',true);
                $("#wp-chatbot-send-message").attr('disabled',true);
            }
            //Remove extra pre loader.
            if($('.wp-chatbot-messages-container').find('.wp-chatbot-comment-loader').length>0){
                $('.wp-chatbot-messages-container').find('.wp-chatbot-comment-loader').parent().parent().hide();
            }
        },
        wpwHistorySave:function () {

            globalwpw.wpwIsWorking=0;
            var wpwHistory= $(globalwpw.settings.messageWrapper).html();
            localStorage.setItem("wpwHitory", wpwHistory);
            //},globalwpw.settings.wildcardsShowTime);
        },

        randomMsg:function(arrMsg){
            var index=Math.floor(Math.random() * arrMsg.length);
            return arrMsg[index];
        },
        ajax:function (data) {
            return jQuery.post(globalwpw.settings.obj.ajax_url, data);

        },
        
		
		dailogAIOAction:function(text){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                return  jQuery.ajax({
                    type : "POST",
                    url :"https://api.dialogflow.com/v1/query?v=20170712",
                    contentType : "application/json; charset=utf-8",
                    dataType : "json",
                    headers : {
                        "Authorization" : "Bearer "+globalwpw.settings.obj.ai_df_token
                    },
                    
                    data: JSON.stringify( {
                        query: text,
                        
                        lang : globalwpw.settings.obj.df_agent_lan,
                        sessionId: localStorage.getItem('botsessionid')?localStorage.getItem('botsessionid'):'wpwBot_df_2018071'
                    } )
                });
            }else{
                return jQuery.post(globalwpw.settings.obj.ajax_url, {
					'action': 'qcld_wp_df_api_call',
                    'dfquery': text,
                    'sessionid': localStorage.getItem('botsessionid')?localStorage.getItem('botsessionid'):'wpwBot_df_2018071'
                });
            }
            
        },
        responseIsOk(response){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                if(response.status.code==200 || response.status.code==206){
                    return true;
                }else{
                    return false;
                }
            }else{
                if(typeof response.responseId !== "undefined"){
                    return true;
                }else{
                    return false;
                }
            }
        },
        getIntentName(response){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                return response.result.metadata.intentName;
            }else{
                return response.queryResult.intent.displayName;
            }
        },
        getParameters(response){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                return response.result.parameters;
            }else{
                return response.queryResult.parameters;
            }
            
        },
        getFulfillmentText(response){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                return response.result.fulfillment.messages;
            }else{
                return response.queryResult.fulfillmentText;
            }
            
        },
        getFulfillmentSpeech(response){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                return response.result.fulfillment.speech;
            }else{
                return response.queryResult.fulfillmentText;
            }
            
        },
        getScore(response){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                return response.result.score;
            }else{
                return response.queryResult.intentDetectionConfidence;
            }
            
        },
        getAction(response){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                return response.result.action;
            }else{
                if(typeof response.queryResult.action !=="undefined"){
                    return response.queryResult.action;
                }else{
                    return '';
                }
                
            }
            
        },
        queryText(response){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                return response.result.resolvedQuery;
            }else{
                return response.queryResult.queryText;
            }
        },
        isActionComplete(response){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                if(!response.result.actionIncomplete){
                    return true;
                }else{
                    return false;
                }
            }else{

                return response.queryResult.allRequiredParamsPresent;

            }
            
        },
        isConversationEnd(response){
            if(globalwpw.settings.obj.df_api_version=='v1'){
                if(typeof(response.result.metadata.endConversation)!=="undefined" && response.result.metadata.endConversation){
                    return true;
                }else{
                    return false;
                }
            }else{

                if(typeof response.queryResult.diagnosticInfo !=="undefined"){
                    if(typeof response.queryResult.diagnosticInfo.end_conversation !== "undefined"){
                        return response.queryResult.diagnosticInfo.end_conversation;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }

            }
            
        },
		
        sugestCat:function () {
            var productSuggest=wpwKits.randomMsg(globalwpw.settings.obj.product_suggest);
            var data={'action':'qcld_wb_chatbot_category'};
            var result=wpwKits.ajax(data);
            result.done(function( response ) {
                wpwMsg.double_nobg(productSuggest,response);
                if(globalwpw.settings.obj.ai_df_enable==1 && globalwpw.df_status_lock==0){
                    globalwpw.wildCard=0;
                    globalwpw.ai_step=1;
                    localStorage.setItem("wildCard",  globalwpw.wildCard);
                    localStorage.setItem("aiStep", globalwpw.ai_step);
                }
            });
        },
        subCats:function (parentId) {
            var subCatMsg=wpwKits.randomMsg(globalwpw.settings.obj.product_suggest);
            var data={'action':'qcld_wb_chatbot_sub_category','parent_id':parentId};
            var result=wpwKits.ajax(data);
            result.done(function( response ) {
                wpwMsg.double_nobg(subCatMsg,response);
            });
        },
        suggestEmail:function (emailFor) {
            var sugMsg=wpwKits.randomMsg(globalwpw.settings.obj.support_option_again);
            var sugOptions= /*emailFor+*/globalwpw.wildcards;
            wpwMsg.double_nobg(sugMsg,sugOptions);

        },

        videohandler:function () {
            $(globalwpw.settings.messageLastChild+' .wp-chatbot-paragraph').html(function(i, html) {
                return html.replace(/(?:https:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?(.+)/g, '<iframe width="250" height="180" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>');
            });
        },
        scrollTo:function () {
            $(globalwpw.settings.botContainer).animate({ scrollTop: $(globalwpw.settings.messageWrapper).prop("scrollHeight")}, 'slow').parent().find('.slimScrollBar').css({'top':$(globalwpw.settings.botContainer).height()+'px'});;
        },
        botPreloader:function () {
            var msgContent='<li class="wp-chatbot-msg">' +
                '<div class="wp-chatbot-avatar">'+
                '<img src="'+globalwpw.settings.obj.agent_image_path+'" alt="">'+
                '</div>'+
                '<div class="wp-chatbot-agent">'+ globalwpw.settings.obj.agent+'</div>'
                +'<div class="wp-chatbot-paragraph"><img class="wp-chatbot-comment-loader" src="'+globalwpw.settings.obj.image_path+'comment.gif" alt="Typing..." /></div></li>';
            return msgContent;
        },
        shopperMsgDom:function (msg) {
            if(globalwpw.hasNameCookie){
                var shopper=globalwpw.hasNameCookie;
            } else{
                var shopper=globalwpw.settings.obj.shopper_demo_name;
            }
            //var date = new Date();

            date = new Date();

            var msgContent='<li class="wp-chat-user-msg">' +
                '<div style="margin-top:40px;" class="wp-chatbot-avatar">'+
                '<img src="'+globalwpw.settings.obj.image_path+'client.png" alt="User Image">'+
                '</div>'+
                '<div class="wp-chatbot-agent">'+shopper +'</div>'
                +'<div class="wp-chatbot-paragraph" style="text-align:center; margin: 0 auto;">'+msg+'</div></li>';
            return msgContent;
        },
        showCart:function () {
            var data = {'action':'qcld_wb_chatbot_show_cart'}
            this.ajax(data).done(function (response) {
                //if cart show on message board
                if($('#wp-chatbot-shortcode-template-container').length == 0) {
                    $(globalwpw.settings.messageWrapper).html(response.html);
                    $('#wp-chatbot-cart-numbers').html(response.items);
                    $('.wp-chatbot-ball-cart-items').html(response.items);
                    wpwKits.disableEditor(wpwKits.randomMsg(globalwpw.settings.obj.shopping_cart));
                }else{  //Cart show on shortcode
                    $('.wp-chatbot-cart-shortcode-container').html(response.html);

                }
                //Add scroll to the cart shortcode
                if($('#wp-chatbot-shortcode-template-container').length > 0  && $('.chatbot-shortcode-template-02').length==0) {
                    $('.wp-chatbot-cart-body').slimScroll({height: '200px', start: 'bottom'});
                }
            });
        },
        toTitlecase:function (msg) {
            return msg.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
        },
        filterStopWords:function(msg){
            var spcialStopWords=",;,/,\\,[,],{,},(,),&,*,.,+ ,?,^,$,=,!,<,>,|,:,-";
            var userMsg="";
            //Removing Special Characts from last position.
            var msgLastChar=msg.slice(-1);
            if(spcialStopWords.indexOf(msgLastChar) >= 0 ){
                userMsg=msg.slice(0, -1);
            }else{
                userMsg=msg;
            }
            var stopWords=globalwpw.settings.obj.stop_words+spcialStopWords;
            var stopWordsArr=stopWords.split(',');
            var msgArr=userMsg.split(' ');
            var filtermsgArr = msgArr.filter(function myCallBack(el){
                return stopWordsArr.indexOf(el.toLowerCase()) < 0;
            });
            filterMsg=filtermsgArr.join(' ');
            return filterMsg;
        },
		htmlTagsScape:function(userString) {
           var tagsToReplace = {
               '&': '&amp;',
               '<': '&lt;',
               '>': '&gt;'
           };
           return userString.replace(/[&<>]/g, function(tag) {
               return tagsToReplace[tag] || tag;
           });
       }
    }
    /*
     * wpwbot Trees are basically product,order and support
     * product tree : asking,showing & shopping part will be covered.
     * order tree : showing order list and email to admin option.
     * support tree : List of support query-answer including text & video and email to admin option.
     */
    var wpwTree={

        greeting:function (msg) {
            /**
             * When Enable DialogFlow then  or else
             */
            if(globalwpw.settings.obj.ai_df_enable==1 && globalwpw.df_status_lock==0){
				
                //When intialize 1 and don't have cookies then keep  the name of shooper in in cookie
                if(globalwpw.initialize==1 && !localStorage.getItem('shopper')  && globalwpw.wildCard==0 && globalwpw.ai_step==0 ){
                    msg=wpwKits.toTitlecase(wpwKits.filterStopWords(msg));
                    $.cookie("shopper", msg, { expires : 365 });
                    localStorage.setItem('shopper',msg);
                    globalwpw.hasNameCookie=msg;
                    //Greeting with name and suggesting the wildcard.
                    var NameGreeting=wpwKits.randomMsg(globalwpw.settings.obj.i_am) +" <strong>"+globalwpw.settings.obj.agent+"</strong>! "+wpwKits.randomMsg(globalwpw.settings.obj.name_greeting)+", <strong>"+msg+"</strong>!";
                    var serviceOffer=wpwKits.randomMsg(globalwpw.settings.obj.wildcard_msg);
                    //After completing two steps messaging showing wildcards.
                    wpwMsg.triple_nobg( NameGreeting,serviceOffer, globalwpw.wildcards )
					
					
					
                    globalwpw.ai_step=1;
                    globalwpw.wildCard=0;
                    localStorage.setItem("wildCard",  globalwpw.wildCard);
                    localStorage.setItem("aiStep", globalwpw.ai_step);
                }
                //When returning shopper then greeting with name and wildcards.
                else if(localStorage.getItem('shopper')  && globalwpw.wildCard==0 && globalwpw.ai_step==0){
                    //After asking service show the wildcards.
                    var serviceOffer=wpwKits.randomMsg(globalwpw.settings.obj.wildcard_msg);
                    globalwpw.ai_step=1;
                    globalwpw.wildCard=0;
                    localStorage.setItem("wildCard",  globalwpw.wildCard);
                    localStorage.setItem("aiStep", globalwpw.ai_step);
					if(globalwpw.settings.obj.show_menu_after_greetings==1){
						wpwMsg.double_nobg(serviceOffer, globalwpw.wildcards);
					}else{
						wpwMsg.single(serviceOffer);
					}
                    
                }
                //When user asking needs then DialogFlow will given intent after NLP steps.
                else if(globalwpw.wildCard==0 && globalwpw.ai_step==1){
                    var dfReturns=wpwKits.dailogAIOAction(msg);
                    dfReturns.done(function( response ) {
                        
						if(globalwpw.settings.obj.df_api_version=='v2'){
							response = $.parseJSON(response);
						}
						
                        if(wpwKits.responseIsOk(response)){

							
                            var userIntent=wpwKits.getIntentName(response);
                            if(userIntent=='start'){
								
                                globalwpw.wildCard=0;
                                var serviceOffer=wpwKits.randomMsg(globalwpw.settings.obj.wildcard_msg);
                                wpwMsg.double_nobg(serviceOffer,globalwpw.wildcards);
								
                            }else if(userIntent=='welcome'){
								
								var messages = wpwKits.getFulfillmentSpeech(response);
								setTimeout(function () {
									wpwMsg.single(messages);
								},globalwpw.settings.preLoadingTime);
								
							}else if(userIntent=='help'){
								
                                $(globalwpw.settings.messageWrapper).html(localStorage.getItem("wpwHitory"));
                                
								//Showing help message
                                setTimeout(function () {
                                    wpwKits.scrollTo();
                                    var helpWelcome = wpwKits.randomMsg(globalwpw.settings.obj.help_welcome);
                                    var helpMsg = wpwKits.randomMsg(globalwpw.settings.obj.help_msg);
                                    wpwMsg.double(helpWelcome,helpMsg);
                                    //dialogflow
                                    if(globalwpw.settings.obj.ai_df_enable==1 && globalwpw.df_status_lock==0){
                                        globalwpw.wildCard=0;
                                        globalwpw.ai_step=1;
                                        localStorage.setItem("wildCard",  globalwpw.wildCard);
                                        localStorage.setItem("aiStep", globalwpw.ai_step);
                                    }
                                },globalwpw.settings.preLoadingTime);
								
                            }else if(userIntent=='reset'){
                                var restWarning=globalwpw.settings.obj.reset;
                                var confirmBtn='<span class="qcld-chatbot-reset-btn" reset-data="yes" >'+globalwpw.settings.obj.yes+'</span> <span> '+globalwpw.settings.obj.or+' </span><span class="qcld-chatbot-reset-btn"  reset-data="no">'+globalwpw.settings.obj.no+'</span>';
                                wpwMsg.double_nobg(restWarning,confirmBtn);
                            }else if(userIntent=='phone'){
								
                                if(typeof(globalwpw.hasNameCookie)=='undefined'|| globalwpw.hasNameCookie==''){
									var shopperName=  globalwpw.settings.obj.shopper_demo_name;
								}else{
									var shopperName=globalwpw.hasNameCookie;
								}
								var askEmail='Hello '+shopperName+'! '+ wpwKits.randomMsg(globalwpw.settings.obj.asking_phone);
								wpwMsg.single(askEmail);
								//Now updating the support part as .
								globalwpw.supportStep='phone';
								globalwpw.wildCard=1;
								//keeping value in localstorage
								localStorage.setItem("wildCard",  globalwpw.wildCard);
								localStorage.setItem("supportStep",  globalwpw.supportStep);

                            }else if(userIntent=='email'){
								
                                if(typeof(globalwpw.hasNameCookie)=='undefined'|| globalwpw.hasNameCookie==''){
									var shopperName=  globalwpw.settings.obj.shopper_demo_name;
								}else{
									var shopperName=globalwpw.hasNameCookie;
								}
								var askEmail='Hello '+shopperName+'! '+ wpwKits.randomMsg(globalwpw.settings.obj.asking_email);
								wpwMsg.single(askEmail);
								//Now updating the support part as .
								globalwpw.supportStep='email';
								globalwpw.wildCard=1;
								//keeping value in localstorage
								localStorage.setItem("wildCard",  globalwpw.wildCard);
								localStorage.setItem("supportStep",  globalwpw.supportStep);

                            }else if(userIntent=='faq'){
								
                                globalwpw.wildCard=1;
                                globalwpw.supportStep='welcome';
                                wpwAction.bot('from wildcard support');
                                //keeping value in localstorage
                                /*localStorage.setItem("wildCard",  globalwpw.wildCard);
                                localStorage.setItem("supportStep", globalwpw.supportStep);*/

                            }else if(userIntent=='Default Fallback Intent'){
							
								var data = {'action':'wpbo_search_response','name':globalwpw.hasNameCookie,'keyword':msg};
								wpwKits.ajax(data).done(function (respond) {

									var json=$.parseJSON(respond);
									if(json.status=='success'){
										if(typeof(json.category)!=="undefined" && json.category){
											
											var question='';
                                            $.each(json.data, function (i, obj) {
                                                question += '<span class="qcld-chatbot-wildcard qcld_simple_txt_response">'+ obj.query +'</span>';
                                            });
                                            
                                            
                                            wpwMsg.single_nobg(question);
											
										}else if(json.multiple){
											var question='';
											$.each(json.data, function (i, obj) {
												question += '<span class="qcld-chatbot-wildcard qcld_simple_txt_response">'+ obj.query +'</span>';
											});
											wpwMsg.double_nobg(wpwKits.randomMsg(globalwpw.settings.obj.did_you_mean),question);
											   
										}else{
											
												wpwMsg.single(json.data[0].response);
												setTimeout(function(){
													wpwMsg.single_nobg('<span class="qcld-chatbot-wildcard"  data-wildcart="back">' + wpwKits.randomMsg(globalwpw.settings.obj.back_to_start) + '</span>');
												},globalwpw.settings.preLoadingTime*2)
											
										}
									}else{
										
										msg = wpwKits.filterStopWords(msg);
									
										if(globalwpw.counter == 2 ){
											
											wpwTree.df_reply(response);
											setTimeout(function(){
												var serviceOffer=wpwKits.randomMsg(globalwpw.settings.obj.support_option_again);
												wpwMsg.double_nobg(serviceOffer,globalwpw.wildcards);
											},globalwpw.settings.preLoadingTime)
											globalwpw.counter = 0;
											
										}else{
											globalwpw.counter++;
											console.log(response);
											wpwTree.df_reply(response);
										}

									}

								})
							
									
								
								
							}else if(wpwKits.getScore(response)!=0){ // checking is reponsing from dialogflow.
                                
                                   
								var sTalkAction=wpwKits.getAction(response);
								
								if(sTalkAction!='' && sTalkAction.indexOf('smalltalk') != -1 ){
									var sMgs=wpwKits.getFulfillmentText(response);
									wpwMsg.single(sMgs);
								}else{
									
									var messages = wpwKits.getFulfillmentText(response);						
									wpwTree.df_reply(response);
									
									
								}
									
                                

                            }else{
								
                                var dfDefaultMsg=globalwpw.settings.obj.df_defualt_reply;
								wpwMsg.double_nobg(dfDefaultMsg,globalwpw.wildcards);
                            }
                        }else{
                            //if bad request or limit cross then
                            globalwpw.df_status_lock=0;
                            var dfDefaultMsg=globalwpw.settings.obj.df_defualt_reply;
                            wpwMsg.double_nobg(dfDefaultMsg,globalwpw.wildcards);
                        }
                    }).fail(function (error) {
						
                        var dfDefaultMsg=globalwpw.settings.obj.df_defualt_reply;
                        wpwMsg.double_nobg(dfDefaultMsg,globalwpw.wildcards);
                    });
                }
            }else{
				
                //When intialize 1 and don't have cookies then keep  the name of shooper in in cookie
                if(globalwpw.initialize==1 && !localStorage.getItem('shopper')  && globalwpw.wildCard==0){
                    msg=wpwKits.toTitlecase(wpwKits.filterStopWords(msg));
                    $.cookie("shopper", msg, { expires : 365 });
                    localStorage.setItem('shopper',msg);
                    globalwpw.hasNameCookie=msg;
                    //Greeting with name and suggesting the wildcard.
                    var NameGreeting=wpwKits.randomMsg(globalwpw.settings.obj.i_am) +" <strong>"+globalwpw.settings.obj.agent+"</strong>! "+wpwKits.randomMsg(globalwpw.settings.obj.name_greeting)+", <strong>"+msg+"</strong>!";
                    var serviceOffer=wpwKits.randomMsg(globalwpw.settings.obj.wildcard_msg);
                    //After completing two steps messaging showing wildcards.

					wpwMsg.triple_nobg( NameGreeting,serviceOffer, globalwpw.wildcards )
					
                }
                //When returning shopper then greeting with name and wildcards.
                else if(localStorage.getItem('shopper')  && globalwpw.wildCard==0){
					
                    //After asking service show the wildcards.
                    var serviceOffer=wpwKits.randomMsg(globalwpw.settings.obj.wildcard_msg);
                    wpwMsg.double_nobg(serviceOffer,globalwpw.wildcards);
                }
            }
        },
		df_multi_handle:function(array){
            if(array.length>0){
                setTimeout(function(){
                    wpwMsg.single(array[0]);
                    array.splice(0, 1);
                    setTimeout(function(){
                        wpwTree.df_multi_handle(array);
                    }, globalwpw.settings.preLoadingTime)
                    
                }, globalwpw.settings.preLoadingTime)
            }
        },
		df_reply:function(response){
			

			//checking for facebook platform
			var i = 0;
            var html = '';
            var responses = [];

            if(globalwpw.settings.obj.df_api_version=='v1'){
                var messages = response.result.fulfillment.messages;
                var action = response.result.actionIncomplete;
                jQuery.each( messages, function( key, message ) {
                    html = '';
                    i +=1;
                    if(message.type==2){
                        
                        html += "<p>" + message.title + "</p>";
                        var index = 0;
                        for (index; index<message.replies.length; index++) {
                            html += "<span class=\"wpb-quick-reply qcld-chat-common\">"+ message.replies[index] +"</span>";
                        }
                        
                        
                    }
                    //check for default reply
                    else if(message.type==0 && message.speech!=''){
                        
                        html += message.speech;
                        
                    }else if(message.type==1){
                        
                        html +='';
                        
                    }else if(message.type=='simple_response'){
                        html += message.textToSpeech;
                    }

                    if(html!=''){
                        responses.push(html);
                    }
                    
                })
            }else{
                var messages = response.queryResult.fulfillmentMessages;
                var actioncomplete = response.queryResult.allRequiredParamsPresent;

                jQuery.each( messages, function( key, message ) {
                    html = '';
                    i +=1;
                    //handeling quickreplies
                    if(typeof message.quickReplies !=="undefined"){
                        if(typeof message.quickReplies.title !=="undefined"){
                            html += "<p>" + message.quickReplies.title + "</p>";
                        }
                        if(typeof message.quickReplies.quickReplies !=="undefined" ){

                            var index = 0;
                            for (index; index<message.quickReplies.quickReplies.length; index++) {
                                html += "<span class=\"wpb-quick-reply qcld-chat-common\">"+ message.quickReplies.quickReplies[index] +"</span>";
                            }

                        }

                    }
                    //handleing default response
                    else if(typeof message.text !=="undefined"){
                        if(typeof message.text.text !=="undefined" && message.text.text.length>0){
                            html += message.text.text[0];
                        }
                    }
                    

                    if(html!=''){
                        responses.push(html);
                    }

                })

            }

            wpwTree.df_multi_handle(responses);
			
		},
        support:function (msg) {
            if(globalwpw.wildCard==1 && globalwpw.supportStep=='welcome'){
                var welcomeMsg= wpwKits.randomMsg(globalwpw.settings.obj.support_welcome);
                var orPhoneSuggest = '';
                if(globalwpw.settings.obj.support_query.length>0){
                    var supportsItems = '';
                    var messenger = '';
                    if(globalwpw.settings.obj.enable_messenger==1) {
                        messenger += '<span class="qcld-chatbot-wildcard"  data-wildcart="messenger">'+wpwKits.randomMsg(globalwpw.settings.obj.messenger_label)+'</span>';
                    }
                    if(globalwpw.settings.obj.enable_whats==1) {
                        messenger += '<span class="qcld-chatbot-wildcard"  data-wildcart="whatsapp">'+wpwKits.randomMsg(globalwpw.settings.obj.whats_label)+'</span>';
                    }
                    if(globalwpw.settings.obj.disable_feedback=='') {
                        messenger+= '<span class="qcld-chatbot-suggest-email" >'+wpwKits.randomMsg(globalwpw.settings.obj.feedback_label)+'</span>';
                    }

                    $.each(globalwpw.settings.obj.support_query, function (i, obj) {
                        supportsItems += '<span class="qcld-chatbot-support-items"  data-query-index="' + i + '">' + obj + '</span>';
                    });
                    var orEmailSuggest = '<span class="qcld-chatbot-suggest-email" >' + wpwKits.randomMsg(globalwpw.settings.obj.support_email) + '</span>';
					
                    if(globalwpw.settings.obj.call_sup=="") {
                        orPhoneSuggest = '<span class="qcld-chatbot-suggest-phone" >' + wpwKits.randomMsg(globalwpw.settings.obj.support_phone) + '</span>';
                    }
					
                     var queryOrEmail=supportsItems/*+orEmailSuggest+orPhoneSuggest+messenger*/;
                }else {
                    if(globalwpw.settings.obj.call_sup=="") {
                        orPhoneSuggest = '<span class="qcld-chatbot-suggest-phone" >' + wpwKits.randomMsg(globalwpw.settings.obj.support_phone) + '</span>';
                    }
                    var queryOrEmail='<span class="qcld-chatbot-suggest-email" >' + wpwKits.randomMsg(globalwpw.settings.obj.support_email) + '</span>'+orPhoneSuggest;

                }

                wpwMsg.double_nobg(welcomeMsg,queryOrEmail);
            } else if(globalwpw.wildCard==1 && globalwpw.supportStep=='email'){

                globalwpw.shopperEmail=msg;
                var validate = "";
                var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                if( re.test(globalwpw.shopperEmail)!=true){
                    validate = validate+wpwKits.randomMsg(globalwpw.settings.obj.invalid_email) ;
                }
                if(validate == ""){
                    var askingMsg=wpwKits.randomMsg(globalwpw.settings.obj.asking_msg);
                    wpwMsg.single(askingMsg);
                    globalwpw.supportStep='message';
                    //keeping value in localstorage
                    localStorage.setItem("supportStep",  globalwpw.supportStep);

                }else{
                    wpwMsg.single(validate);
                    globalwpw.supportStep='email';
                    //keeping value in localstorage
                    localStorage.setItem("supportStep",  globalwpw.supportStep);
                }
            }else if(globalwpw.wildCard==1 && globalwpw.supportStep=='message'){
                var data = {'action':'qcld_wb_chatbot_support_email','name':globalwpw.hasNameCookie,'email':globalwpw.shopperEmail,'message':msg};

                wpwKits.ajax(data).done(function (response) {
                    var json=$.parseJSON(response);
                    var orPhoneSuggest='';
                    if(json.status=='success'){
                        var sucMsg=json.message;
                        wpwMsg.single(sucMsg);
                        //Asking email after showing answer.
                        setTimeout(function(){
                            if(globalwpw.settings.obj.call_sup=="") {
                                orPhoneSuggest = '<span class="qcld-chatbot-suggest-phone" >' + wpwKits.randomMsg(globalwpw.settings.obj.support_phone) + '</span>';
                            }
                            var orEmailSuggest='<span class="qcld-chatbot-suggest-email" >'+wpwKits.randomMsg(globalwpw.settings.obj.support_email)+'</span>';
                            wpwKits.suggestEmail(orEmailSuggest+orPhoneSuggest);
                            globalwpw.wildCard=0;
                        },globalwpw.settings.preLoadingTime);
                    }else{
                        var failMsg=json.message;
                        wpwMsg.single(failMsg);
                        //Asking email after showing answer.
                        setTimeout(function(){
                            if(globalwpw.settings.obj.call_sup=="") {
                                orPhoneSuggest = '<span class="qcld-chatbot-suggest-phone" >' + wpwKits.randomMsg(globalwpw.settings.obj.support_phone) + '</span>';
                            }
                            var orEmailSuggest='<span class="qcld-chatbot-suggest-email" >'+wpwKits.randomMsg(globalwpw.settings.obj.support_email)+'</span>';
                            wpwKits.suggestEmail(orEmailSuggest+orPhoneSuggest);
                            globalwpw.wildCard=0;
                        },globalwpw.settings.preLoadingTime);
                    }
                });

            }else if(globalwpw.wildCard==1 && globalwpw.supportStep=='phone'){
                var data = {'action':'qcld_wb_chatbot_support_phone','name':globalwpw.hasNameCookie,'phone':msg};
                wpwKits.ajax(data).done(function (response) {
                    var json=$.parseJSON(response);
                    var orPhoneSuggest='';
                    if(json.status=='success'){
                        var sucMsg=json.message;
                        wpwMsg.single(sucMsg);
                        //Asking email after showing answer.
                        setTimeout(function(){
                            if(globalwpw.settings.obj.call_sup=="") {
                                orPhoneSuggest = '<span class="qcld-chatbot-suggest-phone" >' + wpwKits.randomMsg(globalwpw.settings.obj.support_phone) + '</span>';
                            }
                            var orEmailSuggest='<span class="qcld-chatbot-suggest-email" >'+wpwKits.randomMsg(globalwpw.settings.obj.support_email)+'</span>';
                            wpwKits.suggestEmail(orEmailSuggest+orPhoneSuggest);
                            globalwpw.wildCard=0;
                        },globalwpw.settings.preLoadingTime);
                    }else{
                        var failMsg=json.message;
                        wpwMsg.single(failMsg);
                        //Asking email after showing answer.
                        setTimeout(function(){
                            if(globalwpw.settings.obj.call_sup=="") {
                                orPhoneSuggest = '<span class="qcld-chatbot-suggest-phone" >' + wpwKits.randomMsg(globalwpw.settings.obj.support_phone) + '</span>';
                            }
                            var orEmailSuggest='<span class="qcld-chatbot-suggest-email" >'+wpwKits.randomMsg(globalwpw.settings.obj.support_email)+'</span>';
                            wpwKits.suggestEmail(orEmailSuggest+orPhoneSuggest);
                            globalwpw.wildCard=0;
                        },globalwpw.settings.preLoadingTime);
                    }
                });

            }else if(globalwpw.wildCard==1 && globalwpw.supportStep=='search'){
                msg = wpwKits.filterStopWords(msg);
				var data = {'action':'wpbo_search_site','name':globalwpw.hasNameCookie,'keyword':msg};
				wpwKits.ajax(data).done(function (response) {
					var json=$.parseJSON(response);
					if(json.status=='success'){
						wpwMsg.single(json.html+'<span class="qcld-chatbot-wildcard"  data-wildcart="back">' + wpwKits.randomMsg(globalwpw.settings.obj.back_to_start) + '</span>');
					}else{
						wpwMsg.single(json.html);
						setTimeout(function(){
							var serviceOffer=wpwKits.randomMsg(globalwpw.settings.obj.support_option_again);
							wpwMsg.double_nobg(serviceOffer,globalwpw.wildcards);
						},globalwpw.settings.preLoadingTime)
						
					}
					
				});

            }

        },
		formbuilder:function(msg){

            

            if(globalwpw.wildCard==7 && globalwpw.formStep=='welcome'){
                var data = {'action':'wpbot_get_form','formid':msg};
				wpwKits.ajax(data).done(function (response) {
					if(response!=''){
						
						var json=$.parseJSON(response);  
						globalwpw.prevform = json.ID;						
						globalwpw.formfieldid = json.ID;
						localStorage.setItem("formfieldid",  globalwpw.formfieldid);
						globalwpw.formStep='field';
						localStorage.setItem("formStep",  globalwpw.formStep);
						globalwpw.formid=msg;
						localStorage.setItem("formid",  globalwpw.formid);
						localStorage.setItem("wildCard",  globalwpw.wildCard);

						var label = json.label;

						if(json.type=='dropdown'){
							var html = '';
							jQuery.each(json.config.option, function(key, value){
								html += '<span class="qcld-chatbot-wildcard qcld-chatbot-formanswer" data-form-value="'+value.value+'" >'+value.label+'</span>';
							})
							wpwMsg.double(label, html);
						}else if(json.type=='checkbox'){
							var html = '';
							jQuery.each(json.config.option, function(key, value){                            
								html += '<input type="checkbox" class="qcld-chatbot-checkbox" value="'+value.value+'">'+value.label+'<br>';
							})
							wpwMsg.double(label, html);
						}else if(json.type=='html'){

							wpwMsg.single(json.config.default);
							globalwpw.formfieldid = json.ID;
							localStorage.setItem("formfieldid",  globalwpw.formfieldid);
							globalwpw.formentry = json.entry;
							localStorage.setItem("formentry",  globalwpw.formentry);
							setTimeout(function(){
								wpwTree.formbuilder();
							}, globalwpw.settings.preLoadingTime)
							

						}else{
								wpwMsg.single(label);
						}
					}
                })

            }else if(globalwpw.wildCard==7 && globalwpw.formStep=='field'){
                var data = {'action':'wpbot_capture_form_value','formid':globalwpw.formid, 'fieldid': globalwpw.formfieldid, 'answer': msg, 'entry':globalwpw.formentry, 'name': globalwpw.hasNameCookie};
				wpwKits.ajax(data).done(function (response) {
                    var json=$.parseJSON(response);
                    console.log(json);

                    if(json.status=='incomplete'){
						console.log('testing');
						if( json.type !='html' ){
							console.log('ghello');

                            if($('.chatbot_intent_reload').length > 0){
                                $('.chatbot_intent_reload').remove();
                            }
                            $('#wp-chatbot-editor-container').append('<span class="chatbot_intent_reload" title="Click to go back." data-wildcard="7" data-step="welcome" data-intent-type="formbuilder" data-intent="'+globalwpw.prevform+'"><i class="fa fa-undo" aria-hidden="true"></i></span>');
                            globalwpw.prevform = globalwpw.formfieldid;
                        }

                        globalwpw.formStep='field';
                        localStorage.setItem("formStep",  globalwpw.formStep);
                        globalwpw.formfieldid = json.ID;
                        localStorage.setItem("formfieldid",  globalwpw.formfieldid);
                        globalwpw.formentry = json.entry;
                        localStorage.setItem("formentry",  globalwpw.formentry);

                        var label = json.label;

                        if(json.type=='dropdown'){
                            var html = '';
                            jQuery.each(json.config.option, function(key, value){
                                html += '<span class="qcld-chatbot-wildcard qcld-chatbot-formanswer" data-form-value="'+value.value+'" >'+value.label+'</span>';
                            })
                            wpwMsg.double(label, html);
                        }else if(json.type=='html'){

                            wpwMsg.single(json.config.default);
                            globalwpw.formfieldid = json.ID;
                            localStorage.setItem("formfieldid",  globalwpw.formfieldid);
                            globalwpw.formentry = json.entry;
                            localStorage.setItem("formentry",  globalwpw.formentry);
                            setTimeout(function(){
                                wpwTree.formbuilder();
                            }, globalwpw.settings.preLoadingTime)
                            

                        }else if(json.type=='checkbox'){
							var html = '';
							jQuery.each(json.config.option, function(key, value){                            
								html += '<input type="checkbox" class="qcld-chatbot-checkbox" value="'+value.value+'">'+value.label+'<br>';
							})
							wpwMsg.double(label, html);
						}else{
								wpwMsg.single(label);
							}

                    }else{
						if($('.chatbot_intent_reload').length > 0){
							$('.chatbot_intent_reload').attr('data-step', 'complete');
						}
                        globalwpw.formfieldid = '';
                        localStorage.setItem("formfieldid",  globalwpw.formfieldid);
                        globalwpw.formStep='welcome';
                        localStorage.setItem("formStep",  globalwpw.formStep);
                        globalwpw.formid='';
                        localStorage.setItem("formid",  globalwpw.formid);
                        globalwpw.wildCard = 0;
                        localStorage.setItem("wildCard",  globalwpw.wildCard);
                        globalwpw.formentry = 0;
                        localStorage.setItem("formentry",  globalwpw.formentry);
						
						var serviceOffer=wpwKits.randomMsg(globalwpw.settings.obj.wildcard_msg);

                        setTimeout(function(){
                            wpwMsg.double_nobg(serviceOffer, globalwpw.wildcards);
                        }, globalwpw.settings.preLoadingTime);
						
						if(jQuery('.chatbot_intent_reload').length>0){
                            jQuery('.chatbot_intent_reload').remove();
                        }
						
                    }

                })
            }

        }
    };
    /*
     * wpwbot Actions are divided into two part
     * shopper will response after initialize message,
     * then based on shopper activities shopper will act.
     */
    var wpwAction={
        bot:function(msg){
            //Disable the Editor
            wpwKits.disableEditor(globalwpw.settings.obj.agent+' '+wpwKits.randomMsg(globalwpw.settings.obj.is_typing));
            msg=msg.toLowerCase();
			
            if(globalwpw.wildcardsHelp.indexOf(msg)>-1){
				console.log(globalwpw.wildcardsHelp);
				
                if(msg==globalwpw.settings.obj.sys_key_help.toLowerCase()){
                    globalwpw.wildCard=0;
                    var serviceOffer=wpwKits.randomMsg(globalwpw.settings.obj.wildcard_msg);
                    wpwMsg.double_nobg(serviceOffer,globalwpw.wildcards);
                }
				/*
                if(msg==globalwpw.settings.obj.sys_key_product.toLowerCase()){
                    globalwpw.wildCard=1;
                    globalwpw.productStep='asking';
                    wpwTree.product(msg);
                }
                if(msg==globalwpw.settings.obj.sys_key_catalog.toLowerCase()){
                    globalwpw.wildCard=1;
                    globalwpw.productStep='search';
                    wpwKits.sugestCat();
                }

                if(msg==globalwpw.settings.obj.sys_key_order.toLowerCase()){
                    globalwpw.wildCard=2;
                    globalwpw.orderStep='welcome';
                    wpwTree.order(msg);
                }
				*/
                if(msg==globalwpw.settings.obj.sys_key_support.toLowerCase()){
                    globalwpw.wildCard=1;
                    globalwpw.supportStep='welcome';
                    wpwTree.support(msg);
                }
                if(msg==globalwpw.settings.obj.sys_key_reset.toLowerCase()){
                    var restWarning=globalwpw.settings.obj.reset;
                    var confirmBtn='<span class="qcld-chatbot-reset-btn" reset-data="yes" >'+globalwpw.settings.obj.yes+'</span> <span> '+globalwpw.settings.obj.or+' </span><span class="qcld-chatbot-reset-btn"  reset-data="no">'+globalwpw.settings.obj.no+'</span>';
                    wpwMsg.double_nobg(restWarning,confirmBtn);
                }
				
				if(msg=='email'){
                    var shopperChoice=$(this).text();
					
					//Then ask email address
					if(typeof(globalwpw.hasNameCookie)=='undefined'|| globalwpw.hasNameCookie==''){
						var shopperName=  globalwpw.settings.obj.shopper_demo_name;
					}else{
						var shopperName=globalwpw.hasNameCookie;
					}
					var askEmail='Hello '+shopperName+'! '+ wpwKits.randomMsg(globalwpw.settings.obj.asking_email);
					wpwMsg.single(askEmail);
					//Now updating the support part as .
					globalwpw.supportStep='email';
					globalwpw.wildCard=1;
					//keeping value in localstorage
					localStorage.setItem("wildCard",  globalwpw.wildCard);
					localStorage.setItem("supportStep",  globalwpw.supportStep);
                }
				

            }else{
				
                /*
                 *   Greeting part
                 *   bot action
                 */
				
				
				
                if(globalwpw.wildCard==0){
					
					if(globalwpw.initialize==1 && !localStorage.getItem('shopper')  && globalwpw.wildCard==0){
						wpwTree.greeting(msg);
					}else if(globalwpw.settings.obj.ai_df_enable==1 && globalwpw.df_status_lock==0){
						wpwTree.greeting(msg);
					}else{
						//simple text response wrapper
                        var data = {'action':'wpbo_search_response','name':globalwpw.hasNameCookie,'keyword':msg};
                        wpwKits.ajax(data).done(function (respond) {

                            var json=$.parseJSON(respond);
                            if(json.status=='success'){
                                if(typeof(json.category)!=="undefined" && json.category){
											
									var question='';
									$.each(json.data, function (i, obj) {
										question += '<span class="qcld-chatbot-wildcard qcld_simple_txt_response">'+ obj.query +'</span>';
									});
									
									
									wpwMsg.single_nobg(question);
									
								}else if(json.multiple){
                                    var question='';
                                    $.each(json.data, function (i, obj) {
                                        question += '<span class="qcld-chatbot-wildcard qcld_simple_txt_response">'+ obj.query +'</span>';
                                    });
                                    wpwMsg.double_nobg(wpwKits.randomMsg(globalwpw.settings.obj.did_you_mean),question);
                                    
                                }else{
                                    
                                        wpwMsg.single(json.data[0].response);
                                        setTimeout(function(){
                                            wpwMsg.single_nobg('<span class="qcld-chatbot-wildcard"  data-wildcart="back">' + wpwKits.randomMsg(globalwpw.settings.obj.back_to_start) + '</span>');
                                        },globalwpw.settings.preLoadingTime*2)
                                    
                                }
                            }else{
                                
								wpwTree.greeting(msg);

                            }

                        })
					}

                }

                /*
                 *   Product part
                 *   bot action
                 */
                /*if(globalwpw.wildCard==1){
                    wpwTree.product(msg);
                }*/

                /*
                 *   order status part
                 *   bot action
                 */
                /*if(globalwpw.wildCard==2){
                    wpwTree.order(msg);
                }*/

                /*
                 *   support part
                 *   bot action
                 */
                if(globalwpw.wildCard==1){
                    wpwTree.support(msg);
                }
				
				if(globalwpw.wildCard==7){
                    wpwTree.formbuilder(msg);
                }

            }
        },
        shopper:function (msg) {
            wpwMsg.shopper(msg);
            if(globalwpw.wildCard==1) {
                this.bot(msg);
            }else if(globalwpw.settings.obj.ai_df_enable==1 && globalwpw.wildCard==0 && globalwpw.ai_step==1 && globalwpw.df_status_lock==0){
                this.bot(msg);
            } else{
				
                //Filtering the user given messages by stopwords
                var filterMsg=(msg);
				
                //handle empty filterMsg as repeat the message.
                if(filterMsg=="")  {
                    //if(globalwpw.emptymsghandler==0){
                        globalwpw.repeatQueryEmpty=wpwKits.randomMsg(globalwpw.settings.obj.empty_filter_msg);
                        globalwpw.emptymsghandler++;
                    //}
                    wpwMsg.single(globalwpw.repeatQueryEmpty);
					setTimeout(function(){
						var serviceOffer=wpwKits.randomMsg(globalwpw.settings.obj.support_option_again);
						wpwMsg.double_nobg(serviceOffer,globalwpw.wildcards);
					},globalwpw.settings.preLoadingTime)
                }else {
                    globalwpw.emptymsghandler=0;
                    this.bot(filterMsg);
                }

            }

        }
    };

    /*
     * wpwBot Plugin Creation without selector and
     * wpwbot and shoppers all activities will be handled.
     */
    $.wpwbot = function(options) {

        //Using plugins defualts values or overwrite by options.
        var settings = $.extend({}, $.wpwbot.defaults, options);
        //Updating global settings
        globalwpw.settings=settings;
        //updating the helpkeywords
        globalwpw.wildcardsHelp=[globalwpw.settings.obj.sys_key_help.toLowerCase(),globalwpw.settings.obj.sys_key_product.toLowerCase(),globalwpw.settings.obj.sys_key_catalog.toLowerCase(),globalwpw.settings.obj.sys_key_support.toLowerCase(),globalwpw.settings.obj.sys_key_order.toLowerCase(),globalwpw.settings.obj.sys_key_reset.toLowerCase(),'email']
        //updating wildcards
        globalwpw.wildcards='';
		
		if(globalwpw.settings.obj.start_menu!=''){
            
            var menu_html = '';
            var menu_items = $.parseHTML($.trim(globalwpw.settings.obj.start_menu));
            $(menu_items).each(function(){
                
                if( $(this).prop('tagName') == 'SPAN' ){
                    if( $(this).hasClass('qcld-chatbot-suggest-email') ){
                        if( globalwpw.settings.obj.disable_feedback=='' ){
                            menu_html += $(this).prop('outerHTML');
                        }
                    }else if( $(this).hasClass('qcld-chatbot-suggest-phone') ){
                        if( globalwpw.settings.obj.call_gen=="" ){
                            menu_html += $(this).prop('outerHTML');
                        }
                    }else if( $(this).hasClass('qcld-chatbot-wildcard') && $(this).attr('data-wildcart') == 'support' ){
                        if( globalwpw.settings.obj.disable_faq=='' ){
                            menu_html += $(this).prop('outerHTML');
                        }
                    }else if( $(this).hasClass('qcld-chatbot-wildcard') && $(this).attr('data-wildcart') == 'messenger' ){
                        if( globalwpw.settings.obj.enable_messenger==1 ){
                            menu_html += $(this).prop('outerHTML');
                        }
                    }else if( $(this).hasClass('qcld-chatbot-wildcard') && $(this).attr('data-wildcart') == 'whatspp' ){
                        if( globalwpw.settings.obj.enable_whats==1 ){
                            menu_html += $(this).prop('outerHTML');
                        }
                    }else{
                        menu_html += $(this).prop('outerHTML');
                    }
                    
                }
            })

            if( menu_html != '' ){
                globalwpw.wildcards = menu_html;
            }else{
                globalwpw.wildcards = globalwpw.settings.obj.start_menu;
            }
			
        }else{
			
		console.log(globalwpw.settings.obj.conversation_form_names);
		
			/*if(globalwpw.settings.obj.disable_product_search!=1) {
				globalwpw.wildcards += '<span class="qcld-chatbot-wildcard"  data-wildcart="product">' + wpwKits.randomMsg(globalwpw.settings.obj.wildcard_product) + '</span>';
			}
			if(globalwpw.settings.obj.disable_catalog!=1) {
				globalwpw.wildcards += '<span class="qcld-chatbot-wildcard"  data-wildcart="catalog">' + wpwKits.randomMsg(globalwpw.settings.obj.wildcard_catalog) + '</span>';
			}
			if(globalwpw.settings.obj.disable_featured_product!=1){
				globalwpw.wildcards+='<span class="qcld-chatbot-wildcard"  data-wildcart="featured">'+wpwKits.randomMsg(globalwpw.settings.obj.featured_products)+'</span>';
			}
			if(globalwpw.settings.obj.disable_sale_product!=1){
				globalwpw.wildcards+='<span class="qcld-chatbot-wildcard"  data-wildcart="sale">'+wpwKits.randomMsg(globalwpw.settings.obj.sale_products)+' </span>';
			}*/

			
			if(globalwpw.settings.obj.disable_faq=='') {
				globalwpw.wildcards+='<span class="qcld-chatbot-wildcard"  data-wildcart="support">'+globalwpw.settings.obj.wildcard_support+'</span>';
			}
			/*
			if(globalwpw.settings.obj.disable_order_status!=1){
				globalwpw.wildcards+='<span class="qcld-chatbot-wildcard"  data-wildcart="order">'+wpwKits.randomMsg(globalwpw.settings.obj.wildcard_order)+'</span>';
			}*/
			if(globalwpw.settings.obj.enable_messenger==1) {
				globalwpw.wildcards += '<span class="qcld-chatbot-wildcard"  data-wildcart="messenger">'+wpwKits.randomMsg(globalwpw.settings.obj.messenger_label)+'</span>';
			}
			if(globalwpw.settings.obj.enable_whats==1) {
				globalwpw.wildcards += '<span class="qcld-chatbot-wildcard"  data-wildcart="whatsapp">'+wpwKits.randomMsg(globalwpw.settings.obj.whats_label)+'</span>';
			}
			if(globalwpw.settings.obj.disable_feedback=='') {
				globalwpw.wildcards += '<span class="qcld-chatbot-suggest-email">'+globalwpw.settings.obj.support_email+'</span>';
			}
			if(globalwpw.settings.obj.call_gen=="") {
				globalwpw.wildcards += '<span class="qcld-chatbot-suggest-phone" >' + globalwpw.settings.obj.support_phone + '</span>';
			}
			
			if(globalwpw.settings.obj.conversation_form_ids[0]!=''){
				
				for(var i=0;i<globalwpw.settings.obj.conversation_form_ids.length;i++){
					
					if(globalwpw.settings.obj.conversation_form_ids[i]!='' && globalwpw.settings.obj.conversation_form_names[i]!=''){
						globalwpw.wildcards += '<span class="qcld-chatbot-wildcard qcld-chatbot-form" data-form="'+globalwpw.settings.obj.conversation_form_ids[i]+'" >'+globalwpw.settings.obj.conversation_form_names[i]+'</span>';
					}
					
				}
				
			}
			
			
		}


        //Initialize the wpwBot with greeting and if already initialize and given name then return greeting..
        if(localStorage.getItem("wpwHitory") && globalwpw.initialize==0 ){
            var wpwHistory=localStorage.getItem("wpwHitory");
            $(globalwpw.settings.messageWrapper).html(wpwHistory);
            //Scroll to the last element.
            wpwKits.scrollTo();
            //Now mainting the current stages tokens
            globalwpw.initialize=1;
            if(localStorage.getItem("wildCard")){
                globalwpw.wildCard=localStorage.getItem("wildCard");
            }
            if(localStorage.getItem("productStep")){
                globalwpw.productStep=localStorage.getItem("productStep");
            }
            if(localStorage.getItem("orderStep")){
                globalwpw.orderStep=localStorage.getItem("orderStep");
            }
            if(localStorage.getItem("supportStep")){
                globalwpw.supportStep=localStorage.getItem("supportStep");
            }
            if(localStorage.getItem("aiStep")){
                globalwpw.ai_step=localStorage.getItem("aiStep");
            }
			
			if(localStorage.getItem("formfieldid")){
                globalwpw.formfieldid=localStorage.getItem("formfieldid");
            }

            if(localStorage.getItem("formentry")){
                globalwpw.formentry=localStorage.getItem("formentry");
            }

            if(localStorage.getItem("formStep")){
                globalwpw.formStep=localStorage.getItem("formStep");
            }
            if(localStorage.getItem("formid")){
                globalwpw.formid=localStorage.getItem("formid");
            }
			
            //update the value for initializing.
            globalwpw.initialize=1;

        } else {
            if(globalwpw.initialize==0 && globalwpw.wildCard==0 && globalwpw.settings.obj.re_target_handler==0){
                wpwWelcome.greeting();
                //update the value for initializing.
                globalwpw.initialize=1;
            }else{  // re targeting part .
                setTimeout(function (e) {
                    wpwWelcome.greeting();
                },8500);
                globalwpw.initialize=1;
            }
        }
        //When shopper click on send button
        $(document).on('click',settings.sendButton,function (e) {
            var shopperMsg =$(settings.messageEditor).val();
            if(shopperMsg != ""){
                wpwAction.shopper(wpwKits.htmlTagsScape(shopperMsg));
                $(settings.messageEditor).val('');
            }
        });
		
		$(document).on('click', '.chatbot_intent_reload', function(e){
			e.preventDefault();
            var obj = $(this);
            if(obj.attr('data-intent-type')=='formbuilder'){

                if( obj.attr('data-step')=='complete' ){
				globalwpw.formStep='field';
				localStorage.setItem("formStep",  globalwpw.formStep);
				}
                globalwpw.wildCard=obj.attr('data-wildcard');
                globalwpw.formfieldid = obj.attr('data-intent');
                wpwTree.formbuilder();

            }
		})

        /*
         * Or when shopper press the ENTER key
         * Then chatting functionality will be started.
         */
		
		$(document).on('click', '.wpb-quick-reply', function(e){
			e.preventDefault();
			$('#wp-chatbot-editor').val($(this).html());
			$('#wp-chatbot-send-message').trigger( "click" );
		})
		
        $(document).on('keypress',settings.messageEditor,function (e) {
            if (e.which == 13||e.keyCode==13) {
                e.preventDefault();
                var shopperMsg =$(settings.messageEditor).val();
                if(shopperMsg != ""){
                    wpwAction.shopper(wpwKits.htmlTagsScape(shopperMsg));
                    $(settings.messageEditor).val('');
                }
            }
        });
		
		$(document).on('click', '.qcld-chatbot-checkbox', function(){
            var value = [];
            $('.qcld-chatbot-checkbox').each(function(){

                if($(this).prop("checked") == true){
                    value.push($(this).val());
                }

            })

           $('#wp-chatbot-editor').val(value.join());

        })
		
        //Click on the wildcards to select a service
        $(document).on('click','.qcld-chatbot-wildcard',function(){
            var wildcardData=$(this).attr('data-wildcart');
            var shooperChoice=$(this).text();
            wpwMsg.shopper_choice(shooperChoice);
            //Wild cards handling for bot.
            if(wildcardData=='product'){
                globalwpw.wildCard=1;
                globalwpw.productStep='asking'
                wpwAction.bot('from wildcard product');
                //keeping value in localstorage
                localStorage.setItem("wildCard",  globalwpw.wildCard);
                localStorage.setItem("productStep", globalwpw.productStep);
            }
            if(wildcardData=='catalog'){
                wpwAction.bot(globalwpw.settings.obj.sys_key_catalog.toLowerCase());
            }
            if(wildcardData=='featured'){
                globalwpw.wildCard=1;
                globalwpw.productStep='featured'
                wpwAction.bot('from wildcard product');
                //keeping value in localstorage
                localStorage.setItem("wildCard",  globalwpw.wildCard);
                localStorage.setItem("productStep", globalwpw.productStep);
            }
            if(wildcardData=='sale'){
                globalwpw.wildCard=1;
                globalwpw.productStep='sale'
                wpwAction.bot('from wildcard product');
                //keeping value in localstorage
                localStorage.setItem("wildCard",  globalwpw.wildCard);
                localStorage.setItem("productStep", globalwpw.productStep);
            }
            if(wildcardData=='order'){
                globalwpw.wildCard=2;
                globalwpw.orderStep='welcome';
                wpwAction.bot('from wildcard order');
                //keeping value in localstorage
                localStorage.setItem("wildCard",  globalwpw.wildCard);
                localStorage.setItem("orderStep", globalwpw.orderStep);
            }
            if(wildcardData=='support'){
				console.log('asdfsdafsda')
                globalwpw.wildCard=1;
                globalwpw.supportStep='welcome';
                wpwAction.bot('from wildcard support');
                //keeping value in localstorage
                localStorage.setItem("wildCard",  globalwpw.wildCard);
                localStorage.setItem("supportStep", globalwpw.supportStep);

            }
            if(wildcardData=='back'){
                globalwpw.wildCard=0;
                wpwAction.bot('start');
                //keeping value in localstorage
                localStorage.setItem("wildCard",  globalwpw.wildCard);
            }

            if(wildcardData=='messenger'){
                var url='https://www.messenger.com/t/'+globalwpw.settings.obj.fb_page_id;
                var win = window.open(url, '_blank');
                win.focus();
            }
            if(wildcardData=='whatsapp'){
                var url='https://api.whatsapp.com/send?phone='+globalwpw.settings.obj.whats_num;
                var win = window.open(url, '_blank');
                win.focus();
            }

        });
		
		$(document).on('click','.qcld-chatbot-form',function(e){
            e.preventDefault();
            var formid=$(this).attr('data-form');
            globalwpw.wildCard=7;
            globalwpw.formStep='welcome';
            wpwTree.formbuilder(formid);
        })
		
		$(document).on('click','.qcld_simple_txt_response',function(e){
            e.preventDefault();
            var text=$(this).text();
            globalwpw.wildCard=0;            
            wpwAction.bot(text);
        })

        $(document).on('click','.qcld-chatbot-formanswer',function(e){
            e.preventDefault();
            var answer=$(this).attr('data-form-value');
            wpwTree.formbuilder(answer);
        })
        //
        $(document).on('click','.qcld-chatbot-product-category',function(){
            var catType=$(this).attr('data-category-type');
            var shopperChoiceCatId=$(this).text()+'#'+$(this).attr('data-category-id');
            var shopperChoiceCategory=$(this).text();
            if(catType=='hasChilds'){
                //Now hide all categories but shopper choice.
                wpwMsg.shopper_choice(shopperChoiceCategory);
                //updating the product steps and bringing the product by category.
                wpwKits.subCats($(this).attr('data-category-id'));
                globalwpw.productStep='search';
                globalwpw.wildCard=1;
            }else{
                //Now hide all categories but shopper choice.
                wpwMsg.shopper_choice(shopperChoiceCategory);
                //updating the product steps and bringing the product by category.
                globalwpw.productStep='category';
                globalwpw.wildCard=1;
                //keeping value in localstorage
                localStorage.setItem("productStep",  globalwpw.productStep);
                wpwAction.bot(shopperChoiceCatId);
            }

        });
        //Product Load More features for product search or category products
        $(document).on('click','#wp-chatbot-loadmore',function (e) {
            $('#wp-chatbot-loadmore-loader').html('<img class="wp-chatbot-comment-loader" src="'+globalwpw.settings.obj.image_path+'loadmore.gif" alt="..." />');
            var loadMoreDom=$(this);
            var productOffest=loadMoreDom.attr('data-offset');
            var searchType=loadMoreDom.attr('data-search-type');
            var searchTerm=loadMoreDom.attr('data-search-term');
            var data = { 'action': 'qcld_wb_chatbot_load_more','offset': productOffest,'search_type': searchType,'search_term': searchTerm};
            //Load more ajax handler.
            wpwKits.ajax(data).done(function (response) {
                //Change button text
                $('#wp-chatbot-loadmore-loader').html('');
                $('.wp-chatbot-products').append(response.html);
                loadMoreDom.attr('data-search-term',response.search_term);
                wpwKits.wpwHistorySave();
                loadMoreDom.attr('data-offset',response.offset);
                if(response.product_num <= response.per_page){
                    loadMoreDom.hide();
                    //Now show the user infinite.
                    setTimeout(function () {
                        var searchAgain = wpwKits.randomMsg(globalwpw.settings.obj.product_infinite);
                        wpwMsg.single(searchAgain);
                        globalwpw.productStep='search';
                        //keeping value in localstorage
                        localStorage.setItem("productStep",  globalwpw.productStep);
                    },globalwpw.settings.wildcardsShowTime);

                }
                //scroll to the last message
                wpwKits.scrollTo();
            });
        });
        /*Products details part **/
        if(globalwpw.settings.obj.open_product_detail!=1){
        $(document).on('click','.wp-chatbot-product a',function (e) {
             e.preventDefault();
            $('.wp-chatbot-product-container').addClass('active-chatbot-product-details');
            $('.wp-chatbot-product-reload').addClass('wp-chatbot-product-loading').html('<img class="wp-chatbot-product-loader" src="'+globalwpw.settings.obj.image_path+'comment.gif" alt="Loading..." />');
            var productId=$(this).attr('wp-chatbot-pid');
            var data = { 'action':'qcld_wb_chatbot_product_details', 'wp_chatbot_pid':productId};
            //product details ajax handler.
            wpwKits.ajax(data).done(function (response) {
                $('.wp-chatbot-product-reload').removeClass('wp-chatbot-product-loading').html('');
                $('#wp-chatbot-product-title').html(response.title);
                $('#wp-chatbot-product-description').html(response.description);
                $('#wp-chatbot-product-image').html(response.image);
                $('#wp-chatbot-product-price').html(response.price);
                $('#wp-chatbot-product-quantity').html(response.quantity);
                $('#wp-chatbot-product-variable').html(response.variation);
                $('#wp-chatbot-product-cart-button').html(response.buttton);
                //Load gallery magnify
                setTimeout(function () {
                    $('#wp-chatbot-product-image-large-path').magnificPopup({type:'image'});
                },1000);

                //For shortcode handle recenlty view product by ajax as
                if($('#wp-chatbot-shortcode-template-container').length > 0){
                    var data = {'action':'qcld_wb_chatbot_recently_viewed_products'};
                    wpwKits.ajax(data).done(function (response) {
                        $('.wp-chatbot-product-shortcode-container').html(response);
                        $('.chatbot-sidebar .wp-chatbot-products').slimScroll({height: '435px', start: 'top'});
                    });
                }
            });

        });
        }
        //Image gallery.
        $(document).on('click','.wp-chatbot-product-image-thumbs-path',function (e) {
            e.preventDefault();
            var imagePath=$(this).attr('href');
            $('#wp-chatbot-product-image-large-path').attr('href',imagePath);
            $('#wp-chatbot-product-image-large-src').attr('src',imagePath);
            //handle thumb active one
            $('.wp-chatbot-product-image-thumbs-path').parent().removeClass('wp-chatbot-product-active-image-thumbs');
            $(this).parent().addClass('wp-chatbot-product-active-image-thumbs');
        });
        //Product details close
        $(document).on('click', '.wp-chatbot-product-close', function (e) {
            $('.wp-chatbot-product-container').removeClass('active-chatbot-product-details');
        });
        /*add to cart part **/
        $(document).on("click","#wp-chatbot-add-cart-button",function (e) {
            var pId=$(this).attr('wp-chatbot-product-id');
            var qnty=$("#vPQuantity").val();
            var data = {'action': 'qcld_wb_chatbot_add_to_cart','product_id': pId,'quantity': qnty };
            //add to cart ajax handler.
            wpwKits.ajax(data).done(function (response) {
                //Change button text
                if(response=="simple"){
                    //Showing cart.
                    wpwKits.showCart();
                    //handle the active tab on chat board.
                    $('.wp-chatbot-operation-option').each(function(){
                        if($(this).attr('data-option')=='cart'){
                            $(this).parent().addClass('wp-chatbot-operation-active');
                        }else{
                            $(this).parent().removeClass('wp-chatbot-operation-active');
                        }
                    });
                }
                //Hide the shortcode and chat ui product details.
                $('.wp-chatbot-product-container').removeClass('active-chatbot-product-details');
            });
        });
        //Add to cart operation for variable product.
        $(document).on('click','#wp-chatbot-variation-add-to-cart',function(event) {
            event.preventDefault();

            var pId=$(this).attr('wp-chatbot-product-id');
            var quanity=$('#vPQuantity').val();
            var variation_id=$(this).attr('variation_id');
            var attributes=new Array();
            $.each($("#wp-chatbot-variation-data select"), function(){
                var attribute = $(this).attr('name')+'#'+ $(this).find('option:selected').text();
                attributes.push(attribute);
            });
            var data = {
                'action': 'variable_add_to_cart',
                'p_id': pId,
                'quantity': quanity,
                'variations_id':variation_id,
                'attributes':attributes
            };
            //add to cart ajax handler.
            wpwKits.ajax(data).done(function (response) {
                //Change button text
                if(response=="variable"){
                    //Showing cart.
                    wpwKits.showCart();
                    //handle the active tab on chat board.
                    //handle the active tab on chat board.
                    $('.wp-chatbot-operation-option').each(function(){
                        if($(this).attr('data-option')=='cart'){
                            $(this).parent().addClass('wp-chatbot-operation-active');
                        }else{
                            $(this).parent().removeClass('wp-chatbot-operation-active');
                        }
                    });
                }
                //Hide the shortcode and chat ui product details.
                $('.wp-chatbot-product-container').removeClass('active-chatbot-product-details');
            });
        });
        //Update cart.
        $(document).on("change", ".qcld-wp-chatbot-cart-item-qnty", function () {
            //Update editor only for chat ui
            if($('#wp-chatbot-shortcode-template-container').length == 0) {
                wpwKits.disableEditor(wpwKits.randomMsg(globalwpw.settings.obj.cart_updating));
            }
            var currentItem=$(this);
            setTimeout(function () {
                var item_key=currentItem.attr('data-cart-item');
                var qnty=currentItem.val();
                var data = {'action': 'qcld_wb_chatbot_update_cart_item_number','cart_item_key':item_key,'qnty':qnty};
                wpwKits.ajax(data).done(function () {
                    //Showing cart.
                    wpwKits.showCart();
                });
            }, globalwpw.settings.preLoadingTime);
        });
        //remove the cart item from global cart.
        $(document).on("click", ".wp-chatbot-remove-cart-item", function () {
            //Update editor only for chat ui
            if($('#wp-chatbot-shortcode-template-container').length == 0) {
                wpwKits.disableEditor(wpwKits.randomMsg(globalwpw.settings.obj.cart_removing));
            }
            var item=$(this).attr('data-cart-item');
            var data = {'action': 'qcld_wb_chatbot_cart_item_remove', 'cart_item':item };
            wpwKits.ajax(data).done(function () {
                //Showing cart.
                wpwKits.showCart();
            })
        });

        /*Support query answering.. **/
        $(document).on('click','.qcld-chatbot-support-items',function (e) {
            var shopperChoose=$(this).text();
            var queryIndex=$(this).attr('data-query-index');
            wpwMsg.shopper_choice(shopperChoose);
            //Now answering the query.
            var queryAns=globalwpw.settings.obj.support_ans[queryIndex];
            wpwMsg.single(queryAns);
            //Asking email after showing answer.
            var orPhoneSuggest='';
            setTimeout(function(){
                if(globalwpw.settings.obj.call_sup!=1) {
                    orPhoneSuggest = '<span class="qcld-chatbot-suggest-phone" >' + wpwKits.randomMsg(globalwpw.settings.obj.support_phone) + '</span>';
                }
                var orEmailSuggest='<span class="qcld-chatbot-suggest-email">'+wpwKits.randomMsg(globalwpw.settings.obj.support_email)+'</span>';
                wpwKits.suggestEmail(orPhoneSuggest+orEmailSuggest);
            },globalwpw.settings.wildcardsShowTime);
        });
        /*Support Email **/
        $(document).on('click','.qcld-chatbot-suggest-email',function (e) {
            var shopperChoice=$(this).text();
            wpwMsg.shopper_choice(shopperChoice);
            //Then ask email address
            if(typeof(globalwpw.hasNameCookie)=='undefined'|| globalwpw.hasNameCookie==''){
                var shopperName=  globalwpw.settings.obj.shopper_demo_name;
            }else{
                var shopperName=globalwpw.hasNameCookie;
            }
            var askEmail='Hello '+shopperName+'! '+ wpwKits.randomMsg(globalwpw.settings.obj.asking_email);
            wpwMsg.single(askEmail);
            //Now updating the support part as .
            globalwpw.supportStep='email';
            globalwpw.wildCard=1;
            //keeping value in localstorage
            localStorage.setItem("wildCard",  globalwpw.wildCard);
            localStorage.setItem("supportStep",  globalwpw.supportStep);

        });
		/*site Search*/
		$(document).on('click','.qcld-chatbot-site-search',function (e) {
            var shopperChoice=$(this).text();
            wpwMsg.shopper_choice(shopperChoice);
            //Then ask email address
            if(typeof(globalwpw.hasNameCookie)=='undefined'|| globalwpw.hasNameCookie==''){
                var shopperName=  globalwpw.settings.obj.shopper_demo_name;
            }else{
                var shopperName=globalwpw.hasNameCookie;
            }
            var askEmail='Hello '+shopperName+'! '+ 'Please enter your keyword for searching';
            wpwMsg.single(askEmail);
            //Now updating the support part as .
            globalwpw.supportStep='search';
            globalwpw.wildCard=1;
            //keeping value in localstorage
            localStorage.setItem("wildCard",  globalwpw.wildCard);
            localStorage.setItem("supportStep",  globalwpw.supportStep);

        });
		
		
        /*Support Phone **/
        $(document).on('click','.qcld-chatbot-suggest-phone',function (e) {
            var shopperChoice=$(this).text();
            wpwMsg.shopper_choice(shopperChoice);
            //Then ask email address
            if(typeof(globalwpw.hasNameCookie)=='undefined'|| globalwpw.hasNameCookie==''){
                var shopperName=  globalwpw.settings.obj.shopper_demo_name;
            }else{
                var shopperName=globalwpw.hasNameCookie;
            }
            var askEmail='Hello '+shopperName+'! '+ wpwKits.randomMsg(globalwpw.settings.obj.asking_phone);
            wpwMsg.single(askEmail);
            //Now updating the support part as .
            globalwpw.supportStep='phone';
            globalwpw.wildCard=1;
            //keeping value in localstorage
            localStorage.setItem("wildCard",  globalwpw.wildCard);
            localStorage.setItem("supportStep",  globalwpw.supportStep);

        });
        //Show chat,cart and recently view products by click event.
        $(document).on('click','.wp-chatbot-operation-option',function (e) {
            e.preventDefault();
            var oppt=$(this).attr('data-option');
            if(oppt=='recent'  && globalwpw.wpwIsWorking==0){
                wpwKits.disableEditor(globalwpw.settings.obj.sys_key_product);
                var data = {'action':'qcld_wb_chatbot_recently_viewed_products'};
                wpwKits.ajax(data).done(function (response) {
                    $(globalwpw.settings.messageWrapper).html(response);
                });
                //First remove wp-chatbot-operation-active class from all selector
                $('.wp-chatbot-operation-option').parent().removeClass('wp-chatbot-operation-active');
                //then add the active class to current element.
                $(this).parent().addClass('wp-chatbot-operation-active');
            }else if(oppt=='chat' && globalwpw.wpwIsWorking==0){
                $(globalwpw.settings.messageWrapper).html(localStorage.getItem("wpwHitory"));
                wpwKits.scrollTo();
                wpwKits.enableEditor(wpwKits.randomMsg(globalwpw.settings.obj.send_a_msg));
                //First remove wp-chatbot-operation-active class from all selector
                $('.wp-chatbot-operation-option').parent().removeClass('wp-chatbot-operation-active');
                //then add the active class to current element.
                $(this).parent().addClass('wp-chatbot-operation-active');
            } else if(oppt=='cart' && globalwpw.wpwIsWorking==0){
                wpwKits.showCart();
                //First remove wp-chatbot-operation-active class from all selector
                $('.wp-chatbot-operation-option').parent().removeClass('wp-chatbot-operation-active');
                //then add the active class to current element.
                $(this).parent().addClass('wp-chatbot-operation-active');
            } else if(oppt=='help' && globalwpw.wpwIsWorking==0){
                if( $('.wp-chatbot-messages-container').length==0) {
                    //if from other nob then goo to the chat window
                    $(globalwpw.settings.messageWrapper).html(localStorage.getItem("wpwHitory"));
                    //Showing help message
                    setTimeout(function () {
                        wpwKits.scrollTo();
                        var helpWelcome = wpwKits.randomMsg(globalwpw.settings.obj.help_welcome);
                        var helpMsg = wpwKits.randomMsg(globalwpw.settings.obj.help_msg);
                        wpwMsg.double(helpWelcome,helpMsg);
                        //dialogflow
                        if(globalwpw.settings.obj.ai_df_enable==1 && globalwpw.df_status_lock==0){
                            globalwpw.wildCard=0;
                            globalwpw.ai_step=1;
                            localStorage.setItem("wildCard",  globalwpw.wildCard);
                            localStorage.setItem("aiStep", globalwpw.ai_step);
                        }
                    },globalwpw.settings.preLoadingTime);
                }else{
                    //Showing help message on chat self window.
                    var helpWelcome = wpwKits.randomMsg(globalwpw.settings.obj.help_welcome);
                    var helpMsg = wpwKits.randomMsg(globalwpw.settings.obj.help_msg);
                    wpwMsg.double(helpWelcome,helpMsg);
                    //dialogflow
                    if(globalwpw.settings.obj.ai_df_enable==1 && globalwpw.df_status_lock==0){
                        globalwpw.wildCard=0;
                        globalwpw.ai_step=1;
                        localStorage.setItem("wildCard",  globalwpw.wildCard);
                        localStorage.setItem("aiStep", globalwpw.ai_step);
                    }
                }
                //First remove wp-chatbot-operation-active class from all selector
                $('.wp-chatbot-operation-option').parent().removeClass('wp-chatbot-operation-active');
                //then add the active class to current element.
                $(this).parent().addClass('wp-chatbot-operation-active');

            } else if(oppt=='support' && globalwpw.wpwIsWorking==0){
                if( $('.wp-chatbot-messages-container').length==0) {
                    //if from other nob then goo to the chat window
                    $(globalwpw.settings.messageWrapper).html(localStorage.getItem("wpwHitory"));
                    //Showing help message
                    setTimeout(function () {
                        wpwKits.scrollTo();
                        globalwpw.wildCard=1;
                        globalwpw.supportStep='welcome';
                        wpwTree.support(globalwpw.settings.obj.sys_key_support.toLowerCase());
                    },globalwpw.settings.preLoadingTime);
                }else{
                    //Showing help message on chat self window.
                    globalwpw.wildCard=1;
                    globalwpw.supportStep='welcome';
                    wpwTree.support(globalwpw.settings.obj.sys_key_support.toLowerCase());
                }

                //First remove wp-chatbot-operation-active class from all selector
                $('.wp-chatbot-operation-option').parent().removeClass('wp-chatbot-operation-active');
                //then add the active class to current element.
                $(this).parent().addClass('wp-chatbot-operation-active');
            }
            //show chat wrapper and hide cart-checkout wrapper
            $(globalwpw.settings.messageWrapper).show();
            $('#wp-chatbot-checkout-short-code').hide();
            $('#wp-chatbot-cart-short-code').hide();


        });
        $(document).on('click','.qcld-chatbot-reset-btn',function (e) {
            e.preventDefault();
            var actionType=$(this).attr('reset-data');
            if(actionType=='yes'){
                $('#wp-chatbot-messages-container').html('');
                localStorage.removeItem('shopper');
                globalwpw.wildCard=0;
                globalwpw.ai_step=0;
                localStorage.setItem("wildCard",  globalwpw.wildCard);
                localStorage.setItem("aiStep", globalwpw.ai_step);
				
				globalwpw.formfieldid = '';
                localStorage.setItem("formfieldid",  globalwpw.formfieldid);
                globalwpw.formStep='welcome';
                localStorage.setItem("formStep",  globalwpw.formStep);
                globalwpw.formid='';
                localStorage.setItem("formid",  globalwpw.formid);
                globalwpw.formentry = 0;
                localStorage.setItem("formentry",  globalwpw.formentry);
				
                $.wpwbot({obj: wp_chatbot_obj, editor_handler: 0, preLoadingTime: wp_chatbot_obj.botpreloadingtime});
            } else if(actionType=='no'){
                wpwAction.bot(globalwpw.settings.obj.sys_key_help.toLowerCase());
            }
        });
        return this;
    };
    //Deafault value for wpwbot.If nothing passes from the work station
    //Then defaults value will be used.
    $.wpwbot.defaults={
        obj:{},
        editor_handler:0,
        sendButton:'#wp-chatbot-send-message',
        messageEditor:'#wp-chatbot-editor',
        messageContainer:'#wp-chatbot-messages-container',
        messageWrapper:'.wp-chatbot-messages-wrapper',
        botContainer:'.wp-chatbot-ball-inner',
        messageLastChild:'#wp-chatbot-messages-container li:last',
        messageLastBot:'#wp-chatbot-messages-container .wp-chatbot-msg:last .wp-chatbot-paragraph',
        preLoadingTime:0,
        wildcardsShowTime:5000,
    }

})(jQuery);