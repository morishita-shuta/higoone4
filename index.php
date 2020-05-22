<?php get_header(); ?>
<?php if(wp_is_mobile()): ?>
<div class="overlay-area">
  <ul class="overlay__list">
    <li class="overlay__item">
      <a href="" class="overlay__item-link">お悩み別コース</a>
    </li>
    <li class="overlay__item">
      <a href="" class="overlay__item-link">成功事例</a>
    </li>
    <li class="overlay__item">
      <a href="" class="overlay__item-link">製品使用</a>
    </li>
    <li class="overlay__item">
      <a href="" class="overlay__item-link">導入までの流れ</a>
    </li>
    <li class="overlay__item">
      <a href="" class="overlay__item-link">料金</a>
    </li>
    <li class="overlay__item">
      <a href="" class="overlay__item-link">私たちについて</a>
    </li>
  </ul>
  <div class="overlay__btn">
    <div class="overlay__btn-item">
      <div class="overlay__btn-dl-icon"></div>
      <a href="" class="overlay__btn-item-link">資料ダウンロード</a>
    </div>
    <div class="overlay__btn-item">
      <div class="overlay__btn-mail-icon"></div>
      <a href="" class="overlay__btn-item-link">お問い合わせ</a>
    </div>
  </div>
</div>
<?php endif; ?>
<div class="main-area">
  <div class="main__catch-area">
    <div class="main__catch-box">
      <h1>
        <img src="<?php echo get_template_directory_uri(); ?>/img/main__logo.png" alt="" class="main__catch-logo">
        <div class="main__catch-text-box">
          <span>
            <span class="main__catch-ruby">
              業<span class="main__catch-ruby-maru"></span>
            </span>
            <span class="main__catch-ruby">
              界<span class="main__catch-ruby-maru"></span>
            </span>
            <span class="main__catch-ruby">
              初<span class="main__catch-ruby-maru"></span>
            </span>
            <span class="main__catch-ruby">
              の<span class="main__catch-ruby-maru"></span>
            </span>
          </span>
          <span class="main__catch-text">EMSレンタルサービス</span>
        </div>
      </h1>
    </div>
    <p class="main__catch-copy">患者様の人生が変わる健康をお届けし、病院のファンを増やすことができるEMS。</p>
  </div>
</div>

<div class="about-area">
  <h2 class="about__title">「 EMS 」 とは？？<span>ABOUT</span></h2>
  <div class="about__body">
    <div class="about__body-left">
      <img src="<?php echo get_template_directory_uri(); ?>/img/about__img.png" alt="">
    </div>
    <div class="about__body-right">
      <div class="about__body-right-container">
        <p class="about__body-caption">
          <span class="about__ruby">
            寝<span class="about__ruby-maru"></span>
          </span>
          <span class="about__ruby">
            て<span class="about__ruby-maru"></span>
          </span>
          <span class="about__ruby">
            貼<span class="about__ruby-maru"></span>
          </span>
          <span class="about__ruby">
            る<span class="about__ruby-maru"></span>
          </span>
          <span class="about__ruby">
            だ<span class="about__ruby-maru"></span>
          </span>
          <span class="about__ruby">
            け<span class="about__ruby-maru"></span>
          </span>
          でトレーニングできる !<br>楽して体質改善できる最新器具です。
        </p>
        <p class="about__body-text">
          「運動したいけど続かない」「健康状態の問題で運動できない」「楽してトレーニングしたい」「トレーニングと同時にリフレッシュしたい」といった方の要望にお答えし て生まれました。<br>
          全国の接骨院・鍼灸院などの治療院が利用する、業務用のメディカルESMであれば、よくある「ただ揺れるだけの腹筋マシン」とは全く違う使用感と効果を体感できます。<br>
          怪我の予防、パフォーマンスアップ、シェイプアップなど様々な場面でご利用いただけます。
        </p>
      </div>
    </div>
  </div>
</div>

<div class="indepth-area">
  <div class="container">
    <div class="indepth__body">
      <h2 class="indepth__title">indepth4.0</h2>
      <ul class="indepth__list">
        <li class="indepth__item">自費メニューの導入ならEMS</li>
        <li class="indepth__item">機能も進化した新型機が</li>
        <li class="indepth__item">ブラックのデザインで登場</li>
      </ul>
    </div>
  </div>
</div>

<div class="function-area">
  <div class="function__caption">
    <div class="function__caption-container">
      <h2 class="function__title">FUNCTION</h2>
      <p class="function__caption-text">患者様の期待に応えるindepthの様々な機能</p>
    </div>
  </div>
  <div class="container">
    <div class="function__space"></div>
    <div class="function__mode">
      <h3 class="function__mode-title">3つの波形モード</h3>
      <div class="function__mode-body">
        <ul class="function__mode-list">
          <?php 
          $items = [
            array(
              'title' => '干渉波',
              'img' => 'function__item-img1.png',
              'text' => '4枚の電極から透過性に優れ、不快感の少ない中周波を出し、体内でぶつけることにより、運動させたい箇所に電気刺激を発生させます。',
            ),
            array(
              'title' => '変調波',
              'img' => 'function__item-img2.png',
              'text' => 'EMS内で運動刺激となる低周波を作り、体内に届けます。干渉波と比べると体表に刺激を感じることがありますが、2枚の電極で施術可能なため、複数箇所を同時に施術可能です。',
            ),
            array(
              'title' => 'パルス波',
              'img' => 'function__item-img3.png',
              'text' => '短時間の刺激を、ゆっくりした間隔で繰り返します。体感は鍼灸に近いものになり、トレーニング的な継続運動ではなく、瞬間的な刺激を筋肉に与えるモードです。',
            ),
          ]
          ?>
          <?php foreach ($items as $item): ?>
          <li class="function__mode-item">
            <h4 class="function__mode-item-title"><?php echo $item['title'] ?></h4>
            <img class="function__mode-item-img" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $item['img'] ?>" alt="">
            <div class="function__mode-item-text"><?php echo $item['text'] ?></div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="function__mode">
      <h3 class="function__mode-title">2つのシーケンスモード</h3>
      <div class="function__mode-body">
        <p class="function__mode-caption">
          指定した波形の出力順番をプログラムすることができます。<br>予め30分のプログラムを設定しておけば、施術途中で機械の操作をする必要がありません。
        </p>
        <ul class="function__mode-list">
          <?php 
          $items = [
            array(
              'title' => 'シーケンシャルモード',
              'img' => 'function__item-img4.png',
              'text' => '4つまでの波形を指定可能。それぞれの波形を指定した時間、順次出力します。',
            ),
            array(
              'title' => 'ダイナミックモード',
              'img' => 'function__item-img5.png',
              'text' => '4つまでの波形を指定可能。それぞれの波形を短時間で切り替え、それを指定時間まで繰り返します。',
            ),
          ]
          ?>
          <?php foreach ($items as $item): ?>
          <li class="function__mode-item">
            <h4 class="function__mode-item-title"><?php echo $item['title'] ?></h4>
            <img class="function__mode-item-img" src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $item['img'] ?>" alt="">
            <div class="function__mode-item-text"><?php echo $item['text'] ?></div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="spec-area">
  <div class="container">
    <div class="spec__caption">
      <h2 class="spec__title">SPEC</h2>
      <p class="spec__caption-text">患者様の期待に応えるindepthの様々な機能</p>
    </div>
  </div>
  <div class="spec__list-wrapper">
    <ul class="spec__list">
      <li class="spec__item">
        <table class="spec__table">
          <tr>
            <th>販売名</th>
            <td>インデプス</td>
          </tr>
          <tr>
            <th>電源電圧</th>
            <td>100V</td>
          </tr>
          <tr>
            <th>発振周波数</th>
            <td>1000～16100Hz</td>
          </tr>
          <tr>
            <th>出力波形</th>
            <td>正弦波・パルス波</td>
          </tr>
          <tr>
            <th>消費電力</th>
            <td>65W（最大）</td>
          </tr>
        </table>
      </li>
      <li class="spec__item">
        <table class="spec__table">
          <tr>
            <th>使用環境温湿度</th>
            <td>10~30℃<br>20~80%RH (結露しないこと)</td>
          </tr>
          <tr>
            <th>保管環境温湿度</th>
            <td>0~35℃<br>10~85%PH (結露しないこと)</td>
          </tr>
          <tr>
            <th>本体寸法</th>
            <td>高さ99mm×幅360mm×奥行281mm<br>(突起部除く)</td>
          </tr>
          <tr>
            <th>本体質量</th>
            <td>約3kg</td>
          </tr>
          <tr>
            <th>付属品</th>
            <td>コード (5本) /電源パッド (4袋16枚)/<br>取扱説明書 : 保証書付き (1部)</td>
          </tr>
        </table>
      </li>
    </ul>
  </div>
</div>

<div class="merit-area">
  <div class="container">
    <h2 class="merit__title">ESMを導入するメリット</h2>
    <p class="merit__text">
      EMSは、整骨院・レディースクリニック・エステサロン等のメニューのひとつとして、幅広い用途でお使いいただけます。健康情報が普及し、根本治療のニーズが高まる昨今。EMSはお客様の健康改善をうながすとともに、整骨院やサロン経営にも多くのメリットがあります。
    </p>
    <div class="merit__list">
      <div class="merit__item-first">
        <div class="merit__item-first-title">
          EMSを導入するメリット
        </div>
      </div>
      <?php 
      $merits = [
        array(
          'num' => '01',
          'title' => '初月平均70～80万円！<br />自費診療メニューで客単価アップ',
          'text' => 'コアレは健康機器・美容機器として、自費診療メニューに活用いただける製品です。<br />テレビやインターネットなどで健康情報が広く普及している現代。体幹を鍛えることの重要性や、基礎的な筋力がさまざまな症状に影響を与えることは、一般のお客様にもよく知られています。一時的な症状の緩和だけでなく「根本治療」のニーズが高まるなか、EMSを活用した自費診療メニューは、多くのお客様に受け入れられています。<br />また、コアレを導入した整骨院様の、導入初月の売り上げ増加額は、平均70～80万円（※トレくるを活用した場合）。多くの整骨院様が、導入1年後には月100万円、2年後には月200万円の売り上げを上げており、無理なく客単価アップに貢献できます。<br />',
        ),
        array(
          'num' => '02',
          'title' => '根本治療と痩身・美容ケアの両方に対応',
          'text' => 'コアレは、用途に応じた5つのモードを搭載。拮抗筋作用を活用した治療効果のアップはもちろん、スタイルアップやダイエット・骨盤矯正・尿もれなどの女性ならではのお悩みまで幅広く対応できます。<br />そのため適応できる業種・業態も幅広く、整骨院・レディースクリニック・エステサロン・スポーツクラブなど、さまざまなシーンに応用いただけます。',
        ),
        array(
          'num' => '03',
          'title' => '汎用性が高くセットメニューが作りやすい',
          'text' => '前述のように、コアレは「根本治療」「トレーニング」「痩身・美容ケア」など、幅広い目的に対応でき、操作も簡単なため、他のメニューと組み合わせたセットメニューが作りやすくなります。<br />たとえば、「骨盤矯正とコアレ」を組み合わせたセットメニューでは、歪んだ骨盤を強制し、さらにコアレを受けることで、インナーマッスルを引き締め、正しい状態を維持しやすくする・・・という提案ができます。',
        ),
        array(
          'num' => '04',
          'title' => '先生の手をかけずに稼働率を高められる',
          'text' => 'コアレは、8コード16パッドで4部位同時施術や、2ベッド同時稼働が可能。受付担当者など、先生でなくともセッティングが可能なため、手をかけずにベッド稼働率を高めることができます。また、セットメニュー実施時の効率的なオペレーションにも貢献します。',
        ),
        array(
          'num' => '05',
          'title' => 'レンタルなので実際にリスクなしで利用できる',
          'text' => '通常ESMの購入は5年リースなどが一般的ですが、実際に導入してみて実感できなければ途中でキャンセルができます。もちろん購入後のサポートも付きますので安心です。あわせてレンタル期間終了後、買取も可能です。ご購入ごとに以下のセットをご提供しています。<br>販売トーク集<br>院内掲出用POP（PDFデータでの配布）<br>院内掲出用料金表（PPTデータでの配布）<br> Web掲出用素材 <br>ページサンプル（PDFデータ）バナーサンプル（JPGデータ）<br>回数券（100枚）<br>回数券販売時に必要な書類の雛形（DOCデータでの配布）
          ',
        ),
      ];
      ?>
      <?php foreach ($merits as $merit): ?>
      <div class="merit__item">
        <p class="merit__item-num"><?php echo $merit['num'] ?></p>
        <h3 class="merit__item-title"><?php echo $merit['title'] ?></h3>
        <p class="merit__item-text"><?php echo $merit['text'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="flow-area">
  <div class="container">
    <div class="flow__caption">
      <h2 class="flow__title">FLOW</h2>
      <p class="flow__caption-text">安心してお任せいただける、導入までの流れ</p>
    </div>
    <div class="flow__list">
    <?php 
      $flows = [
        array(
          'num' => '1',
          'title' => 'お問い合わせ',
          'text' => 'まずはお気軽にお問合せください。',
        ),
        array(
          'num' => '2',
          'title' => '申込書の送付・ご契約',
          'text' => '導入のご契約の前に無料体験のテスト機をお貸しすることも可能です。実際に体験してみてください。',
        ),
        array(
          'num' => '3',
          'title' => '納品',
          'text' => '商品をお送りさせていただき、ご利用いただけます。無料体験を行った場合はそのままご利用いただけます。',
        ),
        array(
          'num' => '4',
          'title' => 'サポート',
          'text' => '実機納品後、院にお伺いして研修を実施いたします。操作説明だけでなく、販売方法のレクチャも行います。サポート定期的に状況の確認などをさせていただきます。また、操作の質問や、販売方法についての疑問などございましたら、いつでもお気軽にお問い合わせください。',
        ),
      ];
      ?>
      <?php foreach ($flows as $flow): ?> 
      <div class="flow__item">
        <div class="flow__item-num"><?php echo $flow['num'] ?></div>
        <h3 class="flow__item-title"><?php echo $flow['title'] ?></h3>
        <p class="flow__item-text"><?php echo $flow['text'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="flow__btn-list">
      <div class="flow__btn-item">
        <a href="tel:06-6232-1910" class="flow__btn-item-link">06-6232-1910</a>
      </div>
      <div class="flow__btn-item">
        <a href="" class="flow__btn-item-link">お問い合わせはこちら</a>
      </div>
    </div>
  </div>
</div>

<div class="price-area">
  <h2 class="price__title">料金<span>PRICE</span></h2>
  <div class="price__body">
    <ul class="price__list">
      <li class="price__item">
        <p class="price__item-span">1年契約</p>
        <p class="price__item-price">月額9800円 <br class="sp-new-line">(税別)</p>
      </li>
      <li class="price__item">
        <div class="price__item-item">
          <p class="price__item-pay">分割払い</p>
          <p class="price__item-pay-how">クレジット払い、銀行振り込み</p>
        </div>
        <div class="price__item-item">
          <p class="price__item-pay">分割払い</p>
          <p class="price__item-pay-how">クレジット払い、銀行振り込み</p>
        </div>
      </li>
    </ul>
  </div>
</div>

<div class="contact-area">
  <div class="contact__item">
    <div class="contact__btn-dl-icon"></div>
    <h3 class="contact__item-title">資料ダウンロード</h2>
    <p class="contact__item-text">詳細を知りたい方はこちらからダウンロードしてください</p>
    <a href="" class="contact__item-btn">
      資料請求はこちらから
    </a>
  </div>
  <div class="contact__item">
    <div class="contact__btn-mail-icon"></div>
    <h3 class="contact__item-title">お問い合わせ</h2>
    <p class="contact__item-text">お問い合わせはこちらから</p>
    <a href="" class="contact__item-btn">
      お問い合わせ
    </a>
  </div>
</div>

</body>
</html>