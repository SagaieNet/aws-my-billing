# AWS My Billing

## Amazon Linuxに AWS-My-Billing を構築する
### IAM Roleを作成する
※Cloudwatch関連のRead権限
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
  
### EC2インスタンスを作成する(上記で作成したIAM Roleを適用する)
| AMI                    | Type     | EBS Size |
| ---------------------- | -------- | -------- |
| Amazon Linux AMI 64bit | T1.micro | 8GB      |
  
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
  
aws-my-billing をダウンロードして設置する
```bash
$ cd /var/www
$ sudo git clone https://github.com/kurimon/aws-my-billing.git
```
  
httpd用設定ファイルをコピーする
```bash
$ sudo cp conf.d/aws-my-billing.conf /etc/httpd/conf.d/
```
  
httpdを起動する
```bash
$ sudo service httpd start
```








