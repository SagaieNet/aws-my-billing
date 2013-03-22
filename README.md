# AWS My Billing

## Usage

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
sudo yum -y update
```
  
aws-my-billingに必要なパッケージをインストールする
```bash
sudo yum -y install httpd24 rrdtool php54 rrdtool-php54
```

AWS SDK for PHPをインストールする
```bash
cd /usr/share/php/
```
