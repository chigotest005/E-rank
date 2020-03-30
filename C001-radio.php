<form name="radioB">
CSSで記述できる色指定として<span class="not">誤っているもの</span>は、次のうちどれか<br>
<input type="radio" name="Q1">ア．16進法<br>
<input type="radio" name="Q1">イ．RGBカラーモデル<br>
<input type="radio" name="Q1">ウ．HSLカラーモデル<br>
<input type="radio" name="Q1">エ．HSBカラーモデル<br>
<br>
Webページに掲載するプライバシーポリシーの説明として正しいものは、次のうちどれか。<br>
<input type="radio" name="Q2">ア．商品の返品および商品の交換の取り扱いについて明記すること。<br>
<input type="radio" name="Q2">イ．医薬品や医療機器の取り扱いについて明記すること。<br>
<input type="radio" name="Q2">ウ．個人情報の取り扱いについて明記すること。<br>
<input type="radio" name="Q2">エ．商品の発送手数料について明記すること。<br>
<br>
HTML5における要素と定義の説明として正しいものは、次のうちどれか。<br>
<input type="radio" name="Q3">ア．nav要素は余談や補足情報<br>
<input type="radio" name="Q3">イ．figure要素は図表<br>
<input type="radio" name="Q3">ウ．footer要素はユーザーの入力データ<br>
<input type="radio" name="Q3">エ．aside要素は強い強調<br>
<br>
スタイルの適用の優先順位の説明として正しいものは、次のうちどれか。<br>
<input type="radio" name="Q4">ア．セレクター「*」は、セレクター「img」よりもスタイルの設定が優先される。<br>
<input type="radio" name="Q4">イ．セレクター「img」は、セレクター「img.class」よりもスタイルの設定が優先される。<br>
<input type="radio" name="Q4">ウ．セレクター「img.class」は、セレクター「img#id」よりもスタイルの設定が優先される。<br>
<input type="radio" name="Q4">エ．セレクター「img#id」は、セレクター「img[src]」よりもスタイルの設定が優先される。<br>
<br>
Webブラウザーのアドレスバーに表示されているURL形式の説明として<span class="not">誤っているもの</span>は、次のうちどれか。<br>
<input type="radio" name="Q5">ア．スキームは「http」以外に「ftp」も定義することができる。<br>
<input type="radio" name="Q5">イ．ホスト名は「www」以外にWebサーバーに登録されている値も定義することができる。<br>
<input type="radio" name="Q5">ウ．スキームを省略して定義することができる。<br>
<input type="radio" name="Q5">エ．ホスト名を省略して定義することができる。<br>
<br>
<input type="button" value="採点" onclick="saiten()" />
</form>



<script>
function saiten(){
  var seikai=0; //正解数を入れる変数
  //答えの番号を配列に入れる
  var trueAns = new Array(4,6,11,15,18);
  //正解のラジオボタンがチェックされているか確認
  for (i=0 ; i<5 ; i++)  {
    if( document.radioB.elements[trueAns[i]].checked )
      seikai++;
  }
  
  alert("あなたは"+seikai*20+"点でした！");
}
</script>