ブラウザメモです。Android、iPhone、mac,windowsを持っている自分には、どこからでもアクセス可能な無料のクラウドメモが必要でした。
パスワード機能はないのでディレクトリトラバーサルされたら　セキュリティ的におしまいですが、簡易メモとしては使い勝手がいい気がします。
cdDB.phpにDB情報を入力し、自DBにテーブルを作成します。
//Create table [table name is 'alter_memo']
//Field Type Null Key Default Extra
//id //int(11)//NO//PRI//NULL　//auto_increment
//name//varchar(20)/YES//　NULL
//text//varchar(5000)//YES//　NULL
//textgroup//varchar(30)//YES//　NULL
//created_at//datetime//NO//　NULL

custom.phpで背景とタイトルと色を設定します。