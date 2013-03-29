<?php

// $targetDir以下に存在するディレクトリを再起的に探してinclude用のPathリストを作成する
function makeIncludePathList($targetDir){
  // ディレクトリ一覧
  $dirList = $targetDir;
  
  // ディレクトリの中をスキャンしてすべてのファイルとディレクトリを取得する
  $filesAndDirs = scandir($targetDir);

  foreach($filesAndDirs as $path){
    // 自身のPathと上位のディレクトリは無視する
    if($path === '.' | $path === '..'){
      continue;
    }

    // 絶対Pathを作成する
    $absolutePath = "{$targetDir}/{$path}";
  
    // ディレクトリだったら再起的に実行してinclude用のPathリストにする
    if(is_dir($absolutePath) === true){
       $dirList .= PATH_SEPARATOR . makeIncludePathList($absolutePath);
    }
  }
  return $dirList;
}

function awsmybillingAutoloader($className) {
    include $className . '.class.php';
}

// include_pathにセットするディレクトリ一覧を取得する
$includePathList = makeIncludePathList(__DIR__ . '/classes');

set_include_path(get_include_path() . PATH_SEPARATOR . $includePathList);
spl_autoload_register('awsmybillingAutoloader');

