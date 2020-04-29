@extends('pc.front.layout')

@section('content')
<div class='page-loader'>
        <div class='loader'>Loading...</div>
      </div>
      <nav class='navbar navbar-custom navbar-fixed-top navbar-transparent' role='navigation'>
        <div class='container'>
          <div class='navbar-header'>
            <button class='navbar-toggle' type='button' data-toggle='collapse' data-target='#custom-collapse'><span class='sr-only'>Toggle navigation</span><span class='icon-bar'></span><span class='icon-bar'></span><span class='icon-bar'></span></button>
            <a class='navbar-brand' href='#main'><img id='shop_name' src="{{ asset('images/shop_name.png') }}"></a>
          </div>
          <div class='collapse navbar-collapse navbar-font' id='custom-collapse'>
            <ul class='nav navbar-nav navbar-right'>
              <li><a href='#concept'>コンセプト</a></li>
              <li><a href='#system'>システム</a></li>
              <li><a href='#staff'>スタッフ</a></li>
              <li><a href='#schedule'>スケジュール</a></li>
              <li><a href='#SNS'>SNS</a></li>
              <li><a href='#event'>イベント</a></li>
              <li><a href='#access'>アクセス</a></li>
              <!-- onClick='alert('アクセスセクションへスクロール');' -->
            </ul>
          </div>
        </div>
      </nav>
      <section class='ios-click home-section home-fade home-full-height' id='home'>
        <div class='hero-slider'>
          <ul class='slides'>
            <li class='bg-dark-30 bg-dark shop-page-header' style="background-image:url('images/background_logo.png')">
              <!-- <div class='titan-caption'>
                <div class='caption-content'>
                  <div class='font-alt mb-30 titan-title-size-1'>This is Titan</div>
                  <div class='font-alt mb-30 titan-title-size-4'> Summer 2017</div>
                  <div class='font-alt mb-40 titan-title-size-1'>Your online fashion destination</div><a class='section-scroll btn btn-border-w btn-round' href='#latest'>Learn More</a>
                </div>
              </div> -->
            </li>
            <!-- <li class='bg-dark-30 bg-dark shop-page-header' style='background-image:url(&quot;assets/images/shop/slider3.png&quot;);'>
              <div class='titan-caption'>
                <div class='caption-content'>
                  <div class='font-alt mb-30 titan-title-size-1'> This is Titan</div>
                  <div class='font-alt mb-40 titan-title-size-4'>Exclusive products</div><a class='section-scroll btn btn-border-w btn-round' href='#latest'>Learn More</a>
                </div>
              </div>
            </li> -->
          </ul>
        </div>
      </section>
      <div class='main'>
        <section id='concept' class='ios-click module module-video bckimg-left' data-background="{{ asset('images/img_02.png') }}">
          <div class='container'>
            <div class='row'>
              <div class='col-sm-6 col-sm-offset-3'>
                <!-- <h2 class='module-title font-alt mb-0'>コンセプト</h2><br> -->
                <h2 class='mod_title' lang='en'>CONCEPT</h2><br>
                <p class='article'>
                  FetishBar BRは落ち着いた雰囲気の中で非日常的な会話と交流ができるBarをコンセプトとしております。
                  当店では様々な嗜好を持つ個性豊かで魅力溢れる女性スタッフが皆様をお待ちしております。
                  初心者の方や女性お一人様でのご来店も大歓迎です。<br><br>
                  ※極度の泥酔状態の方、薬物使用者、店内での客引き行為を目的とする同業者の方、その他当店が不適切と
                  判断したお客様の入店はお断りさせて頂きます。
                </p>
                <p class='article text-right'>- オーナー 美咲</p>
              </div>
            </div>
          </div>
          <div class='video-player' data-property='{videoURL:'https://www.youtube.com/watch?v=EMy5krGcoOU', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}'></div>
        </section>
        <section id='system' class='ios-click module module-video bg-dark-30 bckimg-right' data-background="{{ asset('images/img_04.png') }}">
          <div class='container'>
            <div class='row'>
              <div class='col-sm-6 col-sm-offset-3'>
                <h2 class='mod_title' lang='en'>SYSTEM</h2>
                <table class='sys-table'>
                  <caption class='table-caption'><月～土曜></caption>
                  <tr><td>男性</td><td>￥4,000/1時間（1ドリンク付き)</td></tr>
                  <tr><td>女性</td><td>￥2,000/フリータイム（1ドリンク付き)</td></tr>
                </table>
                <p>※男性のお客様において、1時間以降は￥2,000/30分単位でご精算頂けます。</p>
                <table class='sys-table'>
                  <caption class='table-caption'><日曜></caption>
                  <tr><td>男性</td><td>￥2,000/1時間</td></tr>
                  <tr><td>女性</td><td>￥1,000/フリータイム</td></tr>
                </table>
                <p>※日曜のみセット料金にドリンクのサービスは付いておりません。</p>
                <table class='sys-table'>
                  <caption class='table-caption'><ドリンク></caption>
                  <tr><td>ALL</td><td>￥1,000</td></tr>
                </table>
                <p>※シャンパン･スパークリングワインもご用意しております</p>
              </div>
            </div>
          </div>
          <div class='video-player' data-property='{videoURL:'https://www.youtube.com/watch?v=EMy5krGcoOU', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}'></div>
        </section>
        <section id='staff' class='ios-click module-small'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-6 col-sm-offset-3'>
                <h2 class='module-title-adj'>STAFF</h2>
              </div>
            </div>
            <div class='row multi-columns-row'>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/misaki.jpg') }}" alt='misaki'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>美咲</h4>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/iriya.jpg') }}" alt='iriya'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>イリヤ</h4>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/kana.jpg') }}" alt='kana'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>カナ</h4>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/zakuro.jpg') }}" alt='zakuro'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>柘榴</h4>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/kalma.jpg') }}" alt='kalma'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>カーマ</h4>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/nonoka.jpg') }}" alt='nonoka'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>ののか</h4>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/kotomi.jpg') }}" alt='kotomi'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>ことみ</h4>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/hime.jpg') }}" alt='yuzuki'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>ヒメ</h4>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/yuzuki.jpg') }}" alt='yuzuki'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>弓月</h4>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/roki.jpg') }}" alt='roki'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>ロキ</h4>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src="{{ asset('images/mikaeru.jpg') }}" alt='mikaeru'/>
                    <div class='shop-item-detail'><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --></div>
                  </div>
                  <h4 class='shop-item-title font-alt'>ミカエル</h4>
                </div>
              </div>
              <!-- <div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src='assets/images/shop/product-14.jpg' alt='Cold Garb'/>
                    <div class='shop-item-detail'> --><!-- <a class='btn btn-round btn-b'><span class='icon-basket'>Add To Cart</span></a> --><!-- </div>
                  </div>
                  <h4 class='shop-item-title font-alt'><a href='#'>Girl_08(20)</a></h4>T170
                </div>
              </div> -->
            </div>
            <!-- <div class='row mt-30'>
              <div class='col-sm-12 align-center'><a class='btn btn-b btn-round' href='#'>See all Girs</a></div>
            </div> -->
          </div>
        </section>
        <section id='schedule' class='ios-click module module-video bg-dark-30' data-background=''>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-6 col-sm-offset-3'>
                <h2 class='module-title-adj-sche'>SCHEDULE</h2>
              </div>
              <div class='col-sm-6'>
                <table class='table table-bordered table-responsive col-sm-offset-6'>                  
                  
<caption class='table-caption'>2020年04月度 スケジュール</caption>
<!-- <caption class='table-caption'>< <?php //echo date('n'); ?>月スケジュール ></caption> -->
<thead>
  <tr>
    <th width='100px'>日付</th>
    <th>出勤</th>
  </tr>
</thead>
<tbody>
                    
<tr><td>1日(水)</td><td> 柘榴</td></tr>
<tr><td>2日(木)</td><td> 要お問合せ</td></tr>
<tr><td>3日(金)</td><td> 要お問合せ</td></tr>
<tr class='weekend'><td>4日(土)</td><td> 要お問合せ</td></tr>
<tr class='weekend'><td>5日(日)</td><td> 要お問合せ</td></tr>
<tr><td>6日(月)</td><td> 要お問合せ</td></tr>
<tr><td>7日(火)</td><td> 要お問合せ</td></tr>
<tr><td>8日(水)</td><td> 要お問合せ</td></tr>
<tr><td>9日(木)</td><td> 要お問合せ</td></tr>
<tr><td>10日(金)</td><td> 要お問合せ</td></tr>
<tr class='weekend'><td>11日(土)</td><td> 美咲, 柘榴</td></tr>
<tr class='weekend'><td>12日(日)</td><td> カナ<span class='event_font'>&nbsp&nbspセット料金半額DAY!</span></td></tr>
<tr><td>13日(月)</td><td> 休み</td></tr>
<tr><td>14日(火)</td><td> 休み</td></tr>
<tr><td>15日(水)</td><td> 休み</td></tr>
<tr><td>16日(木)</td><td> 柘榴</td></tr>
<tr><td>17日(金)</td><td> 柘榴</td></tr>
<tr class='weekend'><td>18日(土)</td><td> 美咲</td></tr>
<tr class='weekend'><td>19日(日)</td><td> 柘榴<span class='event_font'>&nbsp&nbspセット料金半額DAY!</span></td></tr>
<tr><td>20日(月)</td><td> 休み</td></tr>
<tr><td>21日(火)</td><td> 休み</td></tr>
<tr><td>22日(水)</td><td> 休み</td></tr>
<tr><td>23日(木)</td><td> 柘榴</td></tr>
<tr><td>24日(金)</td><td> イリヤ</td></tr>
<tr class='weekend'><td>25日(土)</td><td> 美咲, イリヤ</td></tr>
<tr class='weekend'><td>26日(日)</td><td> 休み</td></tr>
<tr><td>27日(月)</td><td> 休み</td></tr>
<tr><td>28日(火)</td><td> カナ</td></tr>
<tr class='weekend'><td>29日(水)</td><td> 休み</td></tr>
<tr><td>30日(木)</td><td> 柘榴</td></tr>

</tbody>                   
                  
                </table>
              </div>
            </div>
          </div>
          <div class='video-player' data-property='{videoURL:'https://www.youtube.com/watch?v=EMy5krGcoOU', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}'></div>
        </section>
        <section id='SNS' class='ios-click module'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-6 col-sm-offset-3'>
                <h2 class='module-title-adj'>SNS</h2>
                <!-- <div class='module-subtitle font-serif'>The languages only differ in their grammar, their pronunciation and their most common words.</div> -->
              </div>
            </div>
            <div class='row'>
              <img id='twitter_logo' src="{{ asset('images/twitter.png') }}" alt='twitter_logo'/>
              <div id='twitter'>
                <a class='twitter-timeline' data-height='600' data-border-color='red' href='https://twitter.com/13fetishbar?ref_src=twsrc%5Etfw' data-tweet-limit=''>Tweets by 13fetishbar</a> <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>
              </div>
            </div>            
          </div>
        </section>
        <hr class='divider-w'>
        <section id='event' class='ios-click module bg-dark-30' id='news'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-6 col-sm-offset-3'>
                <h2 class='module-title-adj'>EVENT</h2>
              </div>
            </div>
            <!-- <p class="event_description">
              <span class="event_date">!!! 12/21(土) イリヤ BIRTHDAY EVENT 開催!!!</span><br>
              今年もこの季節が来たよ♡12月と言えば、イリヤのバースデーだよね？？1年の締めくくりに一緒に大騒ぎしよー！！2019年の日頃の御愛顧に感謝してお尻大解放祭りだよ♡12/21待ってるね！！
            </p>
            <p style="text-align:center"><img src='assets/images/event/20191221_iriya_bd.jpg' alt='iriya_bd_event'/></p> -->
            <!-- <p style="text-align:center"><img src='assets/images/event/20191026_zakuro_bd.jpg' alt='zakuro_event'/></p> -->
            <!-- <p style="text-align:center"><img src='assets/images/event/20200321_panst_event.jpg' alt='panst_event'/></p> -->
            <p style="color:#fff; font-size:2em; text-align:center">随時更新予定！</p>
            <!-- <p style="text-align:center"><img src='assets/images/event/20190710_misaki_db.jpg' alt='misaki_birthday_event'/></p> -->
            <!-- <p style="text-align:center"><img src='assets/images/event/rainy_day_event.jpg' alt='rainy_day_event'/></p> -->
            <!-- <p style="text-align:center"><img src='assets/images/event/20190406_sumire_01.jpg' alt='sumire_event'/></p>
            <p style="text-align:center"><img src='assets/images/event/20190406_sumire_02.jpg' alt='sumire_event'/></p>
            <br>
            <p style="color:#ffffff; font-size:1.5em; text-align:center">★12月より新人のトランジスタグラマーな人懐こい可愛い女の子、ロキちゃんが入店します！</p>
            <p style="text-align:center"><img src='assets/images/staff_original/roki.JPG' alt='roki'/></p> -->

            <!-- もともとのサンプルコード -->
            <!-- <div class='row multi-columns-row post-columns wo-border'>
              <div class='col-sm-6 col-md-4 col-lg-4'>
                <div class='post mb-40'>
                  <div class='post-header font-alt'>
                    <h2 class='post-title custom-hover'><a href='#'>★Girl_01 誕生日パーティー 7/1!!</a></h2>
                  </div>
                  <div class='post-entry'>
                    <p>Girl_01の誕生日パーティーを7/1に開催します。ドレスコード有り：男性スーツ、女性ドレス</p>
                  </div>
                  <div class='post-more'><a class='more-link' href='#'>Read more</a></div>
                </div>
              </div>              
            </div> -->

          </div>
        </section>
        <hr class='divider-w'>
        <section id='access' class='ios-click module-small'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <!-- <h2 class='module-title font-alt'>ACCESS</h2> -->
                <h2 class='mod_title'>ACCESS</h2>
              </div>
              <div class='col-sm-12 mb-20 font-custom'>
                <p>住所：〒532-0024 大阪府大阪市淀川区十三本町２丁目１−１７<br>
                  電話：06-6885-9997</p>
              </div>
              <div class='col-md-12 col-sm-6'>
                <iframe src='https://www.google.com/maps/d/embed?mid=1IJ6QC3mXesuo-JdXISZNTwmoHX7IkaDu' width='100%' height='480'></iframe>
              </div>
            </div>
            <!-- <div class='row client'>
              <div class='owl-carousel text-center' data-items='6' data-pagination='false' data-navigation='false'>
                <div class='owl-item'>
                  <div class='col-sm-12'>
                    <div class='client-logo'><img src='assets/images/client-logo-dark-1.png' alt='Client Logo'/></div>
                  </div>
                </div>
                <div class='owl-item'>
                  <div class='col-sm-12'>
                    <div class='client-logo'><img src='assets/images/client-logo-dark-2.png' alt='Client Logo'/></div>
                  </div>
                </div>
                <div class='owl-item'>
                  <div class='col-sm-12'>
                    <div class='client-logo'><img src='assets/images/client-logo-dark-3.png' alt='Client Logo'/></div>
                  </div>
                </div>
                <div class='owl-item'>
                  <div class='col-sm-12'>
                    <div class='client-logo'><img src='assets/images/client-logo-dark-4.png' alt='Client Logo'/></div>
                  </div>
                </div>
                <div class='owl-item'>
                  <div class='col-sm-12'>
                    <div class='client-logo'><img src='assets/images/client-logo-dark-5.png' alt='Client Logo'/></div>
                  </div>
                </div>
                <div class='owl-item'>
                  <div class='col-sm-12'>
                    <div class='client-logo'><img src='assets/images/client-logo-dark-1.png' alt='Client Logo'/></div>
                  </div>
                </div>
                <div class='owl-item'>
                  <div class='col-sm-12'>
                    <div class='client-logo'><img src='assets/images/client-logo-dark-2.png' alt='Client Logo'/></div>
                  </div>
                </div>
                <div class='owl-item'>
                  <div class='col-sm-12'>
                    <div class='client-logo'><img src='assets/images/client-logo-dark-3.png' alt='Client Logo'/></div>
                  </div>
                </div>
                <div class='owl-item'>
                  <div class='col-sm-12'>
                    <div class='client-logo'><img src='assets/images/client-logo-dark-4.png' alt='Client Logo'/></div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </section>
        <div class='ios-click bg-dark'>
          <div class='container'>
            <div class='row widget-row'>
              <div class='col-md-12'>
                <div class='widget'>
                  <h5 class='widget-title font-alt'>SM & Fetish Bar BR</h5>
                  <span>Address:  Jyuso Motomachi 2-1-17, Yodogawa, Osaka 532-0024</span><br>
                  <span>Phone: 06-6885-9997 (From outside of Japan: +81 6 6885 9997)</span>
                  <!-- <p>Email:<a href='#'>somecompany@example.com</a></p> -->
                </div>
              </div>
              <!-- <div class='col-sm-3'>
                <div class='widget'>
                  <h5 class='widget-title font-alt'>Recent Comments</h5>
                  <ul class='icon-list'>
                    <li>Maria on <a href='#'>Designer Desk Essentials</a></li>
                    <li>John on <a href='#'>Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href='#'>Eco bag Mockup</a></li>
                    <li>Jack on <a href='#'>Bottle Mockup</a></li>
                    <li>Mark on <a href='#'>Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class='col-sm-3'>
                <div class='widget'>
                  <h5 class='widget-title font-alt'>Blog Categories</h5>
                  <ul class='icon-list'>
                    <li><a href='#'>Photography - 7</a></li>
                    <li><a href='#'>Web Design - 3</a></li>
                    <li><a href='#'>Illustration - 12</a></li>
                    <li><a href='#'>Marketing - 1</a></li>
                    <li><a href='#'>Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class='col-sm-3'>
                <div class='widget'>
                  <h5 class='widget-title font-alt'>Popular Posts</h5>
                  <ul class='widget-posts'>
                    <li class='clearfix'>
                      <div class='widget-posts-image'><a href='#'><img src='assets/images/rp-1.jpg' alt='Post Thumbnail'/></a></div>
                      <div class='widget-posts-body'>
                        <div class='widget-posts-title'><a href='#'>Designer Desk Essentials</a></div>
                        <div class='widget-posts-meta'>23 january</div>
                      </div>
                    </li>
                    <li class='clearfix'>
                      <div class='widget-posts-image'><a href='#'><img src='assets/images/rp-2.jpg' alt='Post Thumbnail'/></a></div>
                      <div class='widget-posts-body'>
                        <div class='widget-posts-title'><a href='#'>Realistic Business Card Mockup</a></div>
                        <div class='widget-posts-meta'>15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <hr class='divider-d'>
        <footer class='ios-click footer bg-dark'>
          <div class='container'>
            <div class='row'>
              <div class='col-md-12'>
                <p class='copyright'>&copy; 2018&nbsp;SM & Fetish Bar BR, All Rights Reserved</p>
              </div>
              <div class='col-sm-6'>
                <div class='footer-social-links'><a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a><a href='#'><i class='fa fa-dribbble'></i></a><a href='#'><i class='fa fa-skype'></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class='scroll-up'><a href='#totop'><i class='fa fa-angle-double-up'></i></a></div>
@endsection
