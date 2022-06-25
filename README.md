# Laravel 9 RabbitMQ 隊列

引入 vladimir-yuldashev 的 laravel-queue-rabbitmq 套件來擴增 RabbitMQ 隊列，RabbitMQ 基本上是類似郵局的概念，只要確保你有信箱他就一定把信送到你家，如果你有服務需要等待某件事情做完，並確保順序拿到該資料往下做事，那基本上你相當適合使用。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 推送任務到 RabbitMQ 隊列。
```sh
$ php artisan user:job
```
- 消費 RabbitMQ 隊列。
```sh
$ php artisan rabbitmq:consume
```

----

## 畫面截圖
![](https://i.imgur.com/gFnKFNJ.png)
> 推送隨機一筆使用者資料任務到隊列

![](https://i.imgur.com/azi8mzf.png)
> 消費隊列將結果輸出