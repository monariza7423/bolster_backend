<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    この度はお問い合わせいただき誠にありがとうございます。<br />
    下記内容でお客様からのお問い合わせを受付けましたのでご連絡いたします。

    ============================<br />

    お名前：{{ $data['first_name'] }} 様<br />

    メールアドレス：{{ $data['email'] }}<br />

    お問い合わせ種類：<br />
    {{ $data['contact_type'] }}<br />

    お問い合わせ内容：<br />
    {{ $data['content'] }}<br />

    ============================<br />
    頂戴したお問い合わせは内容を確認のうえ、担当よりご回答いたします。<br />

    ============================<br />
    世の中の1人でも多くの人をHAPPYに☆彡<br />
    ===================================<br />
    【発行元】  BOLSTER株式会社<br />
    コーポレートサイト https://bolster.jp/<br />
    ===================================<br />
  </p>
</body>
</html>

