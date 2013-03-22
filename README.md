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
  
```Bash
sudo yum -y update
```
