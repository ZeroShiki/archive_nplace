//トップページがあるディレクトリ名
var dir_root = "archive_nplace";

//パンくずリストにindex.htmlを表示するかどうか
//表示する -> 1  表示しない -> 0
var flg_disp_index = 1;

//置換するファイル名、ディレクトリ名
//
//※先にファイル名を書いて、ディレクトリ名は後ろに書いてください。
//※最後の要素を書いた行にカンマは付けないでください。
var name_list = [ 
  ["products", "製品情報"],
  ["support", "サポート"],
  ["archive_nplace", "ホーム"],
  ["carnavi", "カーナビゲーション"],
  ["drive_recorder", "ドライブレコーダー"]
];


//表示しているページのパスを取得し、dir_rootの前後でカットする
var href = location.href;

split_arr = href.split("#"); // ページ内リンクを削除する
href = split_arr[0];

if( flg_disp_index == 0 ) {
  href = href.substring( href.indexOf( dir_root ) );
} else {
  href = href.substring( href.indexOf( dir_root ) + dir_root.length );
}


//パスを/単位で区切り、url_listに保存する
var url_list = href.split("/");


//index.htmlを表示しない場合、配列から削除する
var index_no = url_list.indexOf( "index.html" );
if( flg_disp_index == 0 && index_no != -1 ) {
  url_list.splice( index_no, 1 );
}

var href = "";

for( var i = 0; i < url_list.length - 1; i++ ) {
  href += "../";
}

//url_listの各要素を、name_list配列の値に応じて入れ替える
for( var i = 0; typeof( name_list[i] ) != "undefined"; i++ ) {
  
  var index_no = url_list.indexOf( name_list[i][0] );
  
  if( index_no != -1 ) {
    url_list[index_no] = name_list[i][1];
  }
  
}

jQuery(function(){         

  for( var i = 0; typeof( url_list[i] ) != "undefined"; i++ ) {
    jQuery('#breadcrumb_list').append('<li><a class="breadcrumb" href="' + href.substring( i * 3 ) + 'index.html">' + url_list[i] + '</a></li>');
  }
  
  // liの最後の要素の<a>タグを外す
  var a_text = $("#breadcrumb_list li:last-child").text();
  $("#breadcrumb_list li:last-child").empty();
  $("#breadcrumb_list li:last-child").text( a_text );
  
});
