<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    この度はお問い合わせいただき誠にありがとうございます。
    下記内容でお客様からのお問い合わせを受付けましたのでご連絡いたします。

    ============================

    お名前：{{ $data['first_name'] }} 様

    メールアドレス：{{ $data['email'] }}

    お問い合わせ種類：
    {{ $data['contact_type'] }}
    お問い合わせ内容：
    {{ $data['content'] }}

    ============================
    頂戴したお問い合わせは内容を確認のうえ、担当よりご回答いたします。

    ============================
    世の中の1人でも多くの人をHAPPYに☆彡
    ===================================
    【発行元】  BOLSTER株式会社
    コーポレートサイト https://bolster.jp/
    ===================================
  </p>
</body>
</html>

