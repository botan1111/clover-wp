<?php get_header(); ?>
<main class="l-main">
    <div class="l-fv l-inner_padding">
        <div class="l-inner_width">
            <div class="l-fv_content">
                <h1 class="l-fv_title">確かな専門知識で安心を届ける<br>街の法律家</h1>
            </div>
        </div>
    </div><!-- /.l-fv -->
    <section class="l-main_news l-inner_padding l-section" id="news">
        <div class="l-inner_width">
            <div class="l-main_news_title">
                <h2 class="c-title">NEWS</h2>
                <p class="c-title-ja">お知らせ</p>
            </div>
            <ul class="l-main_news_list">
                <?php
                query_posts('posts_per_page=2');
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="l-main_news_item">
                            <time class="l-main_news_date" datetime="<?php echo get_the_date(); ?>" lang="en"><?php the_time(get_option('date_format')); ?></time>
                            <?php $category = get_the_category();
                            if ($category[0]) {
                                echo '<span class="l-main_news_tag">' . $category[0]->cat_name . '</span>';
                            }
                            ?>
                            <h3 class="l-main_news_title"><?php the_title(); ?></h3>
                            
                            <div class="l-main_news_text"><?php the_content(); ?></div>
                        </li>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>記事がありません</p>
                <?php endif; ?>
                
            </ul><!-- /.l-main_news_list -->
        </div><!-- /.l-inner_width -->
    </section><!-- /.l-main_news -->

    <section class="l-main_about l-inner_padding l-section" id="about">
        <div class="l-inner_width">
            <div class="l-main_about_title">
                <h2 class="c-title">ABOUT</h2>
                <p class="c-title-ja">クローバー司法書士事務所について</p>
            </div>
            <div class="l-main_about_content">
                <div class="l-main_about_item">
                    <p class="l-main_about_text">家の近所に相談しやすい法律家がいたらいいな・・・との思いから、私が生まれ育った千葉市にクローバー司法書士事務所を開業いたしました。
                    </p>
                    <p class="l-main_about_text">専門的な知識が必要な遺産相続・遺言・成年後見制度に関することなどでお困りでしたらぜひ一度ご相談ください。</p>
                    <p class="l-main_about_text">初回は無料で相談ができ、その際に ”今後必要な手続き・お見積・ご契約について” お話いたします。</p>
                    <p class="l-main_about_text">法律に関することでお困りのことがありましたら、どうぞお気軽にお問い合わせください。</p>
                </div>
                <div class="l-main_about_img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/about.jpg" alt="">
                </div>
            </div>
        </div><!-- /.l-inner_width -->
    </section><!-- /.l-main_about -->

    <section class="l-main_service l-inner_padding l-section" id="service">
        <div class="l-inner_width">
            <div class="l-main_service_title">
                <h2 class="c-title">SERVICE</h2>
                <p class="c-title-ja">取扱業務</p>
            </div>
            <ul class="l-main_service_list">
                <li class="l-main_service_item">
                    <div class="l-main_service_thumbnail">
                        <img src="<?php echo get_template_directory_uri() ?>/img/service01.jpg" alt="">
                    </div>
                    <div class="l-main_service_body">
                        <h3 class="l-main_service_title">相続・遺言</h3>
                        <p class="l-main_service_text">
                            相続による不動産登記の名義変更手続き、相続登記を前提としての戸籍の収集、遺産分割協議書の作成について対応いたします。<br>また、法律で定められた形式での自筆証書遺言、公正証書遺言での遺言作成をお手伝いいたします。
                        </p>
                    </div>
                </li>
                <li class="l-main_service_item">
                    <div class="l-main_service_thumbnail">
                        <img src="<?php echo get_template_directory_uri() ?>/img/service02.jpg" alt="">
                    </div>
                    <div class="l-main_service_body">
                        <h3 class="l-main_service_title">成年後見</h3>
                        <p class="l-main_service_text">
                            成年後見制度とは、判断能力の不十分な成年者（認知症高齢者、知的障害者、精神障害者等）を支援し、保護するための制度です。<br>後見人選任申立書類作成から家庭裁判所への申し立てまで対応いたします。
                            </ｐ>
                    </div>
                </li>
                <li class="l-main_service_item">
                    <div class="l-main_service_thumbnail">
                        <img src="<?php echo get_template_directory_uri() ?>/img/service03.jpg" alt="">
                    </div>
                    <div class="l-main_service_body">
                        <h3 class="l-main_service_title">登記業務</h3>
                        <p class="l-main_service_text">
                            ①土地や建物の名義変更や抵当権抹消などに関する不動産登記<br>②会社の設立や解散などに関する商業登記<br>どちらも対応いたします。</p>
                    </div>
                </li>
            </ul><!-- /.l-main_blog_list -->
        </div><!-- /.l-inner_width -->
    </section><!-- /.l-main_service -->

    <section class="l-main_price l-inner_padding l-section" id="price">
        <div class="l-inner_width">
            <div class="l-main_price_title">
                <h2 class="c-title">PRICE</h2>
                <p class="c-title-ja">料金表</p>
            </div>
            <div class="l-main_price_content">
                <p class="l-main_price_text"><span>＊</span>こちらは目安となります。初回のご相談とお見積りは無料ですので、一度お問い合わせください。</p>
                <p class="l-main_price_text"><span>＊</span>報酬とは別に登録免許税等の費用が発生いたします。</p>
            </div>
            <h3 class="l-main_price_table_title">相続・遺言</h3>
            <table class="l-main_price_table">
                <tr>
                    <th>種別</th>
                    <th>報酬</th>
                </tr>
                <tr>
                    <td>戸籍謄本取得</td>
                    <td>50,000円〜</td>
                </tr>
                <tr>
                    <td>遺産分割協議書作成</td>
                    <td>50,000円〜</td>
                </tr>
                <tr>
                    <td>遺言書作成</td>
                    <td>50,000円〜</td>
                </tr>
            </table>
            <h3 class="l-main_price_table_title">成年後見</h3>
            <table class="l-main_price_table">
                <tr>
                    <th>種別</th>
                    <th>報酬</th>
                </tr>
                <tr>
                    <td>成年後見等申立手続</td>
                    <td>50,000円〜</td>
                </tr>
                <tr>
                    <td>居住用不動産の処分許可申立手続</td>
                    <td>50,000円〜</td>
                </tr>
                <tr>
                    <td>特別代理人就任</td>
                    <td>50,000円〜</td>
                </tr>
            </table>
            <h3 class="l-main_price_table_title">不動産登記</h3>
            <table class="l-main_price_table">
                <tr>
                    <th>種別</th>
                    <th>報酬</th>
                </tr>
                <tr>
                    <td>所有権保存</td>
                    <td>50,000円〜</td>
                </tr>
                <tr>
                    <td>所有権移転</td>
                    <td>50,000円〜</td>
                </tr>
                <tr>
                    <td>抵当権設定</td>
                    <td>50,000円〜</td>
                </tr>
            </table>
            <h3 class="l-main_price_table_title">商業登記</h3>
            <table class="l-main_price_table">
                <tr>
                    <th>種別</th>
                    <th>報酬</th>
                </tr>
                <tr>
                    <td>会社設立</td>
                    <td>50,000円〜</td>
                </tr>
                <tr>
                    <td>役員変更</td>
                    <td>50,000円〜</td>
                </tr>
                <tr>
                    <td>本店移転</td>
                    <td>50,000円〜</td>
                </tr>
                <tr>
                    <td>解散・清算</td>
                    <td>50,000円〜</td>
                </tr>
            </table>
        </div><!-- /.l-inner_width -->
    </section><!-- /.l-main_price -->

    <section class="l-main_flow l-inner_padding l-section" id="flow">
        <div class="l-inner_width">
            <div class="l-main_flow_title">
                <h2 class="c-title">FLOW</h2>
                <p class="c-title-ja">ご依頼の流れ</p>
            </div>
            <div class="l-main_flow_content">
                <div class="l-main_flow_img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/flow.jpg" alt="">
                </div>
                <ol class="l-main_flow_list">
                    <li class="l-main_flow_item">
                        <h3 class="l-main_flow_list_title"><span class="l-main_flow_number">01</span>無料相談のお申込み</h3>
                        <p class="l-main_flow_list_text">
                            お電話にてご相談の日時をご予約いただくか、下記のお問い合わせフォームより希望日時をお知らせください。<br>ZOOMによるオンラインでの面談も受け付けております。
                        </p>
                        <div class="l-main_flow_btn">
                            <a href="#contact" class="l-main_flow_link">お問い合わせはこちら</a>
                        </div>
                    </li>
                    <li class="l-main_flow_item">
                        <h3 class="l-main_flow_list_title"><span class="l-main_flow_number">02</span>ご相談
                        </h3>
                        <p class="l-main_flow_list_text">
                            ご来所いただくか、オンラインにてお話を伺います。<br>その際に ”今後必要な手続き・お見積・ご契約について”
                            わかりやすくお話しいたします。<br>初回の相談時間の目安は30分～1時間となります。
                        </p>
                    </li>
                    <li class="l-main_flow_item">
                        <h3 class="l-main_flow_list_title"><span class="l-main_flow_number">03</span>検討</h3>
                        <p class="l-main_flow_list_text">
                            当日にご依頼されるかどうかを決めていただく必要はありません。<br>一度お持ち帰りいただきご検討の上いただき、説明した内容にご納得いただけましたら、再度ご連絡ください。
                        </p>
                    </li>
                    <li class="l-main_flow_item">
                        <h3 class="l-main_flow_list_title"><span class="l-main_flow_number">04</span>委任契約締結</h3>
                        <p class="l-main_flow_list_text">
                            ご依頼の範囲や費用を明確にした委任契約書を作成いたします。<br>
                            その際に契約書の控えをお渡しいたします。
                        </p>
                    </li>
                </ol>
            </div><!-- /.l-main_flow_content -->
        </div><!-- /.l-inner_width -->
    </section><!-- /.l-main_flow -->
    <section class="l-main_access l-inner_padding l-section" id="access">
        <div class="l-inner_width">
            <div class="l-main_access_title">
                <h2 class="c-title">ACCESS</h2>
                <p class="c-title-ja">所在地</p>
            </div>
            <div class="l-main_access_content">
                <div class="l-main_access_map">
                    <div class="iframe-wrap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.170526613!2d140.03162815081143!3d35.64817003010488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6022821fd52ebfdf%3A0xcec0c09c4bed45e0!2z5bmV5by144Oh44OD44K744Ob44O844Or!5e0!3m2!1sja!2sjp!4v1633929672712!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="l-main_access_list">
                    <p class="l-main_access_text">〒000-0000 <br>千葉県 千葉市 美浜区 中瀬 0 - 0 - 0</p>
                    <p class="l-main_access_text"><span>電話番号</span>000-000-0000</p>
                    <p class="l-main_access_text"><span>FAX</span>111-111-1111</p>
                    <p class="l-main_access_text"><span>受付時間</span>平日 9：00〜18：00</p>
                </div>
            </div><!-- /.l-main_access_content -->
        </div><!-- /.l-inner_width -->
    </section><!-- /.l-main_access -->
    <section class="l-main_contact l-inner_padding l-section" id="contact">
        <div class="l-inner_width">
            <div class="l-main_contact_title">
                <h2 class="c-title">CONTACT</h2>
                <p class="c-title-ja">お問い合わせ</p>
            </div>
            <div class="l-main_contact_content">
                <p class="l-main_contact_text">
                    ご相談の予約はお電話【 000-000-0000 】（受付時間平日 9：00〜18：00）<br>または下記フォームからお願いいたします。<br>基本的にEメールでこちらからご連絡させていただきます。<br>電話での連絡をご希望の方は、ご相談の概要の欄に「電話連絡希望」とご記入ください。
                </p>
                <p class="l-main_contact_attention"><span class="l-main_contact_attention--color">*</span>の内容は必須項目になります。</p>
            </div><!-- /l-main_contact_form-content -->
            <?php echo do_shortcode('[mwform_formkey key="44"]'); ?>
        </div><!-- /.l-inner_width -->
    </section><!-- /.l-main_contact -->
</main>
<?php get_footer(); ?>