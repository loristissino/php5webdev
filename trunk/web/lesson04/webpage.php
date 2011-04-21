<?php
class WebPage
{
  public function setText($text)
  {
    $this->text=$text;
  }
  public function showPage()
  {
    echo $this->text;
  }
}
$mypage=new WebPage();
$mypage->setText('hello');
$mypage->showpage();
