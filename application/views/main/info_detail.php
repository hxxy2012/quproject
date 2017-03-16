<?php $this->load->view("header");?>
	<link rel="stylesheet" type="text/css" href="/statics/css/activity.css">
	<script type="text/javascript" src="/html/js/jquery.lazyload.js"></script>
	<script type="text/javascript" src="/html/js/activity.js"></script>


<body style="font-size: 12px;">
<div class="wrap">
	<div class="detail_wrap">

		
		<script>
		<!--
		var speed=30; //数字越大速度越慢
		// var tab=document.getElementById("isplay__wrap_slide");
		// var tab1=document.getElementById("isplay__content");
		// var tab2=document.getElementById("isplay__content2");
		// tab2.innerHTML=tab1.innerHTML;
		// function Marquee(){
		// if(tab2.offsetWidth-tab.scrollLeft<=0)
		// tab.scrollLeft-=tab1.offsetWidth
		// else{
		// tab.scrollLeft++;
		// }
		// }
		// var MyMar=setInterval(Marquee,speed);
		// tab.onmouseover=function() {clearInterval(MyMar)};
		// tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
		-->
		</script>		
		<!-- <?php  var_dump($data);?> -->
		<input type="hidden" name="pid" class="pid" id="pid" value="<?php echo $data['id'];?>">
		<div class="pic_box">
			<div class="detail_top_pic" title="<?php echo $data['en_title'] ? $data['en_title'] : $data['title'];?>" style="background-image:url(<?php echo strstr($data['image'],'http:') ? $data['image'] : $this->api_url.$data['image'];?>);"></div>
		</div>
		<?php $userinfo = get_userinfo_by_uid($data['uid']);?>
		<div class="detail_tit">
			<h2><?php echo $data['en_title'] ? $data['en_title'] : $data['title'];?></h2>
		</div>
		<div class="detail_info">
			<a class="detail_info_user" href="/main/student_detail/<?php echo $data['uid'];?>"><i style="background-image:url(<?php echo $userinfo['icon'];?>)"></i><?php echo $userinfo['nickname'];?></a>
			<span class="detail_info_date"><?php echo date_md($data['start_time']);?></span>
			<span class="detail_info_view">阅读&nbsp;<em><?php echo $data['view']?$data['view']:1;?></em>&nbsp;&nbsp;报名&nbsp;<em><?php echo $data['accept_count'];?></em></span>
		</div>
		<div class="detail_list clear">
			<ul>
				<li>
					<p>
						<span class="list_icon1"></span>
						报名人数:<?php echo $data['need_num'];?>人
											</p>
				</li>
				<li>
					<p>
						<span class="list_icon2"></span>
						<span>费用:<?php echo $data['single_price']?$data['single_price']:0;?>元/人</span>
					</p>
				</li>
				<li style="position:relative;">
					<p>
						<span class="list_icon3"></span>
						<span><?php echo date_md($data['start_time']).' '.date_hi($data['start_time']);?> 至 <?php echo date_md($data['end_time']).' '.date_hi($data['end_time']);?></span>
					</p>
					<div class="ir countdown clear">
						<div>
							<h3 class="days" id="days">04</h3>
							<span class="days_ref">天</span>
						</div>
						<div>
							<h3 class="hours" id="hours">09</h3>
							<span class="hours_ref">时</span>
						</div>
						<div>
							<h3 class="minutes" id="minutes">57</h3>
							<span class="hours_ref">分</span>
						</div>
					</div>
				</li>
				<li>
					<p>
						<span class="list_icon4"></span>
						<span class="place">活动地点:<?php echo $data['en_city'] ? $data['en_city'] : $data['city'];?>&nbsp;&nbsp;<?php echo $data['en_address'] ? $data['en_address'] : $data['address'];?></span>
					</p>
				</li>
				
			</ul>
		</div>

		
		<h2 class="title"><span>活动介绍</span></h2>
		<div class="detail_text">
			<?php echo $data['en_details'] ? htmlspecialchars_decode(htmlspecialchars_decode($data['en_details'],ENT_QUOTES)) :htmlspecialchars_decode(htmlspecialchars_decode($data['details'],ENT_QUOTES));?>


		</div>

		<!--h2 class="title"><span>已报名(<?php echo $data['join_count'];?>)</span><a href="/main/join_list/<?php echo $id;?>"><em>查看全部&gt;</em></a></h2>
		<div class="detail_enroll">
			<ul>
            	<?php foreach( $data['join_user'] as $value ):?>
				<a href="/main/student_detail/<?php echo $value['uid'];?>">
                <li>
					<img src="<?php echo strstr($value['icon'],'http:') ? $value['icon'] : $this->api_url.$value['icon'];?>">
					<p><?php echo $value['nickname'];?></p>
				</li>
                </a>
                <?php endforeach;?>
            </ul>
		</div-->

		
		<h2 class="title"><span>已加入(<?php echo $data['accept_count'];?>)</span><a href="/main/accept_list/<?php echo $id;?>"><em>查看全部&gt;</em></a></h2>
		<div class="detail_enroll">
			<ul>
            	<?php foreach( $data['accept_user'] as $value ):?>
				<a href="/main/student_detail/<?php echo $value['uid'];?>">
                <li>
					<img src="<?php echo strstr($value['icon'],'http:') ? $value['icon'] : $this->api_url.$value['icon'];?>">
					<p><?php echo $value['nickname'];?></p>
				</li>
                </a>
                <?php endforeach;?>
            </ul>
		</div>




		

		<dl class="detail_publisher">
			<dt>
				<div class="fl"><a href="/main/student_detail/<?php echo $data['uid'];?>"><img src="<?php echo strstr($userinfo['icon'],'http:') ? $userinfo['icon'] : $this->api_url.$userinfo['icon'];?>"></a></div>
				<div class="ir">
					<h2 class="attachment"><a href="/main/student_detail/<?php echo $data['uid'];?>" class="title"><?php echo $userinfo['nickname'];?></a>
                    <a class="attent ajax-post <?php if($if_guanzhu==1){ echo 'off';}else{echo "on";}?> fa" target-form="objid" id="post_uid" return-msg="已关注" change-msg="&nbsp;关注&nbsp;" url="<?php echo $data['uid'];?>"><span><?php if($if_guanzhu==1){ echo '已关注';}else{echo "关注";}?></span></a></h2>
				</div>
			</dt>
			<dd>
				
				<?php echo $userinfo['signature'];?>			</dd>
			<input type="hidden" class="objid" id="objid" value="<?php echo $data['uid'];?>">
		</dl>

		<h2 class="title"><span>精选活动</span><a href="/"><em>活动首页&gt;</em></a></h2>
		<div class="detail_hot">
			<ul>
				<?php foreach( $hot_events as $value ):?>									
                    <a href="/main/info_detail/<?php echo $value['id'];?>">
                    <li>
                        <div class="il" style="background-image:url(<?php echo strstr($value['image'],'http:') ? $value['image'] : $this->api_url.$value['image'];?> )"></div>
                        <div class="ir">
                            <h2><?php echo $value['en_title'];?></h2>
                            <p><?php echo date('m',$value['start_time']);?>月<?php echo date('d',$value['start_time']);?>日 <?php echo date('H:i',$value['start_time']);?>开始</p>
                        </div>
                    </li>
                    </a>
                <?php endforeach;?>
             </ul>
		</div>
		<br><br><br><br>
		
		<!--主播-->
		<div class="detail_btn">
			<div class="il">
                <a href="/main"><i class="fa fa-chevron-circle-left"></i>返回</a>				
                <a href="/main"><i class="fa fa-home"></i>主页</a>
                <a class="attent_btn ajax-post <?php if($if_favorinfo==1){ echo 'on';}else{echo "off";}?>" target-form="pid" id="add_favor" url="/main/favor" return-msg="已收藏" change-msg="收藏"><i class="fa"></i><span id="favor_name"><?php if($if_favorinfo==1){ echo '已收藏';}else{echo "收藏";}?></span></a>				
			</div>
			<div class="ir">
				
				<?php if( $data['uid'] == $_SESSION['uid'] ):?>
				<a class="signup on" href="/main/info_manage/<?php echo $id;?>" >查看进度</a>
<?php endif;?>
                	<?php if( $data['end_time'] > time() ):?>
                        <a class="signup off" id="enrollOut" url="/api/join_info" <?php if($if_joininfo==0){?>style="display:none;"<?php }?>><span>已报名</span></a>
                        
                        <a class="signup on" id="enrollIn" url="/api/join_info" <?php if($if_joininfo==1){?>style="display:none;"<?php }?> ><span>立即报名</span></a>
					<?php else:?>
                     <a class="signup off" ><span>已结束</span></a>
                    <?php endif;?>

			</div>
		</div>

		<script>
//			立即报名
			$("#enrollIn").click(function(){
				var that = this;
				var target = $(that).attr('url');
				var info_id = $('#pid').val();
				$(that).addClass('disabled').attr('autocomplete','off').prop('disabled',true);
				tusiload('Sign up...');
				window.location.href = '/main/signup/'+info_id;
<?php /*?>				<?php if( $_SESSION['uid'] == '' ):?>
			
					window.location.href = '/user/login';
				<?php else:?>
					window.location.href = '/main/signup/'+info_id;
			 	$.post(target,{ info_id:"<?php echo $id;?>" }).success(function(data){
					
					tusiload('false');

			 		if(data==-1){
			 			window.location.href = '/user/login';
			 		}else{
			 			if(data==1)
						{
			 				//操作成功
							$("#enrollOut").show();
							$(that).hide();
			 				tusi('success');
			 			}else{
			 				notice('failed');
			 			}
						
			 			//按钮点击后,1.5S内不能重复点击
			 			setTimeout(function(){
			 				$(that).removeClass('disabled').attr('autocomplete','on').prop('disabled',false);
			 			},1500);
			 		}
			 	});
				<?php endif;?><?php */?>
			})

			$("#enrollOut").click(function(){
				var that = this;
				make_sure('Are you sure you want to cancel your registration?');
				
				$('#bottom_tip .true').click(function(){
					
					var target = $(that).attr('url');
					$(that).addClass('disabled').attr('autocomplete','off').prop('disabled',true);
					tusiload('Cancel the application...');
					 $.post(target,{ info_id:"<?php echo $id;?>" }).success(function(data){
						
					 	tusiload('false');

					 	if(data==0){
					 		window.location.href = '/user/login';
					 	}else{
					 		if(data==-1){
					 			//操作成功
								$("#enrollIn").show();
								$(that).hide();
					 			tusi('success');
					 		}else{
					 			notice('failed');
					 		}
							
					 		//按钮点击后,1.5S内不能重复点击
					 		setTimeout(function(){
					 				$(that).removeClass('disabled').attr('autocomplete','on').prop('disabled',false);
					 			},1500);
					 	}
					 });
				})
				
			})


			$("#post_uid").click(function(){
				var that = this;
				var post_uid = $(that).attr('url');
				var target = '/api/add_guanzhu';
				
				tusiload('...');
				<?php if( !isset($_SESSION['uid']) || $_SESSION['uid'] == '' ):?>
					window.location.href = '/user/login';
				<?php else:?>
			 	$.post(target,{'action':'add_guanzhu','zhubo_id':post_uid,'uid':<?php echo $_SESSION['uid'];?>}).success(function(data){
					
					tusiload('false');
					data = JSON.parse(data);
			 		if(data.status==-1){
			 			tusi(data.msg);
			 			// $(that).html("关注");
			 		}else{
			 			if(data.msg=='添加关注成功'){
			 				//操作成功
			 				$(that).removeClass('on').addClass('off').prop('disabled',true);
							$(that).html("已关注");
			 				tusi('成功');
			 			}else if(data.msg=='取消关注成功'){
			 					$(that).removeClass('off').addClass('on').prop('disabled',true);
							$(that).html("关注");
			 				tusi('成功');

			 			}else{
			 				notice('failed');
			 			}
						
			 			//按钮点击后,1.5S内不能重复点击
			 			setTimeout(function(){
			 				$(that).removeClass('disabled').attr('autocomplete','on').prop('disabled',false);
			 			},1500);
			 		}
			 	});
				<?php endif;?>
			})


			$("#add_favor").click(function(){
				var that = this;
				var post_uid = $(that).attr('url');
				var target = '/api/add_favor';
				
				// tusiload('...');
				<?php if( !isset($_SESSION['uid']) || $_SESSION['uid'] == '' ):?>
					window.location.href = '/user/login';
				<?php else:?>
			 	$.post(target,{'info_id':<?php echo $id;?>}).success(function(data){
					
					// tusiload('失败');
			 		if(data==1){
			 			tusi('成功');
			 			$(that).removeClass('off').addClass('on').prop('disabled',true);
			 			$("#favor_name").html("已收藏");
			 		}else{
			 			if(data==-1){
			 				//操作成功
			 				$(that).removeClass('on').addClass('off').prop('disabled',true);
							$("#favor_name").html("收藏");
			 				tusi('成功');
			 			}else{
			 				notice('失败');
			 			}
						
			 			//按钮点击后,1.5S内不能重复点击
			 			setTimeout(function(){
			 				$(that).removeClass('disabled').attr('autocomplete','on').prop('disabled',false);
			 			},1500);
			 		}
			 	});
				<?php endif;?>
			})

			
		</script>
		
	</div>




<div class="ux-popmenu" style="position: fixed; background-color: rgba(0, 0, 0, 0.498039);">
	<div class="content show" style="bottom: 0px; position: fixed;">
		<section class="card-combine"> 
			 <a href="/main"><span>主页</span></a>
			 
			<a href="javascript:location.reload();"><span>刷新</span></a>
			<a class="close" href="javascript:;"><span>取消</span></a>
		</section>
	</div>
</div>

<script>

$(".menu i.fa-bars").on('touchend',function(){
	$('.ux-popmenu').fadeToggle();
	$('.ux-popmenu .content').slideDown();
})
$(".ux-popmenu .close").click(function(){
	$('.ux-popmenu').fadeToggle();
	$('.ux-popmenu .content').slideUp();
})
</script>
		
			

<script type="text/javascript">
	 

	/*阻止用户双击使屏幕上滑*/
	var agent = navigator.userAgent.toLowerCase();        //检测是否是ios
	var iLastTouch = null;                                //缓存上一次tap的时间
	if (agent.indexOf('iphone') >= 0 || agent.indexOf('ipad') >= 0)
	{
	    document.body.addEventListener('touchend', function(event)
	    {
	        var iNow = new Date()
	            .getTime();
	        iLastTouch = iLastTouch || iNow + 1 /** 第一次时将iLastTouch设为当前时间+1 */ ;
	        var delta = iNow - iLastTouch;
	        if (delta < 500 && delta > 0)
	        {
	            event.preventDefault();
	            return false;
	        }
	        iLastTouch = iNow;
	    }, false);
	}
</script>
 
<!-- 倒计时 -->
<script>

	$.QianLoad = {
	    PageLoading: function(options) {
	        var defaults = {
	            delayTime: 0, //页面加载完成后，加载进度条淡出速度
	            sleep: 0, //设置挂起,等于0时则无需挂起
	        }
	        var options = $.extend(defaults, options);
	        //在页面未加载完毕之前显示的loading Html自定义内容
	        var _LoadingHtml = '<div class="load-wrap"></div>';
	        //呈现loading效果
	        $("body").append(_LoadingHtml);
	        //监听页面加载状态
	        document.onreadystatechange = PageLoaded;
	        function PageLoaded() {
	            $({
	                property: 0
	            }).animate({
	                property: 100
	            }, {
	                duration: 500,
	                step: function() {
	                    var percentage = Math.round(this.property);

	                    //页面加载后执行
	                    $('.wrap').children().hide();
	                    if (document.readyState == "complete") {

	                        setTimeout(function() {
                        		$('.load-wrap').remove();
                        		$('.wrap').children().show();
                        		$('.ux-popmenu').hide();
	                        },
	                        options.sleep);
	                    }
	                }
	            });
	        }
	    }
	}

	// $.QianLoad.PageLoading({
	//     sleep: 500
	// });

  function GetRTime(){
    var EndTime= '<?php echo get_left_minute($data['end_time']);?>';
 
    var d=0;
    var h=0;
    var m=0;
    var end = EndTime.split("|");
 
    
    d=end[0];
    h=end[1];
    m=end[2];
    if( d>=0){
	if(d.toString().length==1) d = '0'+d;
	if(h.toString().length==1) h = '0'+h;
	if(m.toString().length==1) m = '0'+m;
    document.getElementById("days").innerHTML = d;
    document.getElementById("hours").innerHTML = h;
    document.getElementById("minutes").innerHTML = m;
	}else{
		$('#days').parent().parent().hide();
	}
  }
  GetRTime();
  setInterval(GetRTime,60000);

  $('.share_top .fa').on('touchend',function(){
  	$('.share').hide();
  })

</script>



<?php $this->load->view("footer");?>