# AWS My Billing
CloudwatchからAWSの請求情報を取得してグラフ表示できるようにするソフトェア
  
---
![Screen Shot](https://raw.github.com/kurimon/aws-my-billing/master/docs/screenshot01.png "Screen Shot")
  
# Usage
## Amazon Linuxに AWS-My-Billing を構築する
### Cloudwatchの情報が取得可能なIAM Roleを作成する
```javascript
{
  "Statement": [
    {
      "Action": [
        "sns:Get*",
        "sns:List*",
        "autoscaling:Describe*",
        "cloudwatch:Describe*",
        "cloudwatch:List*",
        "cloudwatch:Get*"
      ],
      "Effect": "Allow",
      "Resource": "*"
    }
  ]
}
```
  
### EC2インスタンスを作成する(上記で作成したIAM Roleを適用する)
| AMI                    | Type     | EBS Size |
| ---------------------- | -------- | -------- |
| Amazon Linux AMI 64bit | T1.micro | 8GB      |
  
### EC2インスタンスの環境設定
インスタンスのパッケージを最新版にする
```bash
$ sudo yum -y update
```
  
aws-my-billingに必要なパッケージをインストールする
```bash
$ sudo yum -y install git httpd24 rrdtool php54 php54-cli rrdtool-php54
```

タイムゾーンをJSTにする
```bash
$ sudo cp /usr/share/zoneinfo/Japan /etc/localtime
```
  
Composerをインストールする
```bash
$ curl -s https://getcomposer.org/installer | php
```
  
AWS SDK for PHPをインストールして設定ファイルを配置する
```bash
$ sudo mkdir /opt/AWSSDKforPHP
$ cd /opt/AWSSDKforPHP
$ sudo sh -c 'cat > composer.json << EOT
{
    "require": {
        "aws/aws-sdk-php": "2.*"
    }
}
EOT'
$ sudo curl -s http://getcomposer.org/installer | sudo php
$ sudo php composer.phar install
```
  
PHPのインクルードディレクトリにAWSSDKforPHPのシンボリックリンクを作成する
```bash
$ cd /usr/share/php/
$ sudo ln -s /opt/AWSSDKforPHP AWSSDKforPHP
```
  
aws-my-billing をダウンロードして設置する
```bash
$ cd /var/www
$ sudo git clone https://github.com/kurimon/aws-my-billing.git
```
  
aws-my-billing の設定
config.iniから監視不要なサービスを削除する
```bash
$ cd /var/www/aws-my-billing
$ sudo vim config.ini
```
```bash
[service_names]
service_names = AmazonEC2,AmazonCloudFront,AmazonElastiCache,AmazonRDS,AmazonRoute53,AmazonS3,AmazonSNS,AWSDataTransfer,AWSSupportBusiness,total
```
  
aws-my-billing の初期化
initファイルを実行する
```bash
$ sudo chmod 700 init update
$ sudo ./init
```
  
cronの設定
```bash
$ sudo crontab -e 
```
```bash
0 * * * * /var/www/aws-my-billing/update
```
  
httpd用設定ファイルをコピーする
```bash
$ cd /var/www/aws-my-billing
$ sudo cp conf.d/aws-my-billing.conf /etc/httpd/conf.d/
```
  
httpdを起動する
```bash
$ sudo service httpd start
```
  
以上でセットアップは完了。
  
http://ホスト名/aws-my-billing/ でアクセスできる事を確認する。

# Support
https://www.facebook.com/kkurimon




