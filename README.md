## 導入手順
1.git clone  
 `$git clone git@github.com:monariza7423/bolster_backend.git`

2.パッケージ関係のインストール  
 `$ composer install` 

3.mamp（XAMPP）でDB作成

4.環境ファイル設定  
 `$ cp .env.example .env`  
※上記実行後は.envが生成されていることを確認。
  
`$ php artisan key:generate`  
.env内、APP_KEYが設定されていることを確認。  
その他、環境に合わせて.envファイルを変更。

5.DBマイグレーション  
 `$ php artisan migrate`

6.プロジェクト起動  
`$ php artisan serve`
