<?php
/**
 * 主题页脚
 * @author Seaton Jiang <seaton@vtrois.com>
 * @license MIT License
 * @version 2020.12.14
 */
?>
<div class="k-footer">
    <div class="f-toolbox">
        <div class="gotop <?php if ( kratos_option('s_wechat', false) ){ echo 'gotop-haswechat'; } ?>">
            <div class="gotop-btn">
                <span class="kicon i-up"></span>
            </div>
        </div>
        <?php if ( kratos_option('s_wechat', false) ){ ?>
        <div class="wechat">
            <span class="kicon i-wechat"></span>
            <div class="wechat-pic">
                <img src="<?php echo kratos_option('s_wechat_url', ASSET_PATH . '/assets/img/wechat.png'); ?>">
            </div>
        </div>
        <?php } ?>
        <div class="search">
            <span class="kicon i-find"></span>
            <form class="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
                <input type="text" name="s" id="search-footer" placeholder="<?php _e('搜点什么呢?', 'kratos'); ?>" style="display:none"/>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="social">
                <?php
                    $social = array('s_sina', 's_bilibili', 's_coding', 's_gitee', 's_twitter', 's_telegram', 's_linkedin', 's_youtube', 's_github', 's_stackflow', 's_email');
                    foreach ($social as $social) {
                        if (kratos_option($social)) {
                            echo '<a target="_blank" rel="nofollow" href="' . kratos_option($social . '_url') . '"><i class="kicon i-' . str_replace("s_", "", $social) . '"></i></a>';
                        }
                    }
                ?>
                </p>
				<p>
				(๑•̀ㅂ•́)و✧本站已萌萌哒运行 <SPAN id=span_dt_dt style="color: #0196e3;"></SPAN>
				<SCRIPT language=javascript>
				function show_date_time(){
				window.setTimeout("show_date_time()", 1000);
				BirthDay=new Date("1/11/2020 00:00:00");//这个日期是可以修改的
				today=new Date();
				timeold=(today.getTime()-BirthDay.getTime());
				sectimeold=timeold/1000
				secondsold=Math.floor(sectimeold);
				msPerDay=24*60*60*1000
				e_daysold=timeold/msPerDay
				daysold=Math.floor(e_daysold);
				e_hrsold=(e_daysold-daysold)*24;
				hrsold=Math.floor(e_hrsold);
				e_minsold=(e_hrsold-hrsold)*60;
				minsold=Math.floor((e_hrsold-hrsold)*60);
				seconds=Math.floor((e_minsold-minsold)*60);
				span_dt_dt.innerHTML=""+daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒";
				}
				show_date_time();
				</SCRIPT></p>
                <?php
                    $sitename = get_bloginfo('name');
                    echo '<p>' . kratos_option('s_copyright', 'COPYRIGHT © 2021 ' . $sitename . '. ALL RIGHTS RESERVED.') . '</p>';
                    echo '<p>THEME <a href="https://github.com/vtrois/kratos" target="_blank" rel="nofollow">KRATOS</a> MADE BY <a href="https://www.vtrois.com/" target="_blank" rel="nofollow">VTROIS</a></p>';
                    if (kratos_option('s_icp')) {
                        echo '<p><a href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow">' . kratos_option('s_icp') . '</a></p>';
                    }
                    if (kratos_option('s_gov')) {
                        echo '<p><a href="' . kratos_option('s_gov_link', '#') . '" target="_blank" rel="nofollow" ><i class="police-ico"></i>' . kratos_option('s_gov') . '</a></p>';
                    }
                    if (kratos_option('seo_statistical')) {echo '<p>' . kratos_option('seo_statistical') . '</p>';}
					echo '<p> <a href="https://www.upyun.com/?utm_source=lianmeng&utm_medium=referral"><img src="https://pic.codinglink.tech/blog_img/又拍云_logo6.png" width="55"></a>提供云存储服务</p>' ;
                ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
