# AWS My Billing

## Amazon Linuxに AWS-My-Billing を構築する

### IAM Roleの作成
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
  
AWS SDK for PHPをインストールする
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

