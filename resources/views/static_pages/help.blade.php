@extends('layouts.default')
@section('title','帮助')
@section('content')
<form action="http://www.baidu.com/baidu" target="_blank">
<div align="center">
<input name=tn type=hidden value=baidu>
<a href="http://www.baidu.com/"><img src="http://img.baidu.com/search/img/baidulogo_clarity_80_29.gif" alt="Baidu" align="bottom" border="0"></a>
<input type=text name=word size=30>
<input type="submit" value="百度搜索">
</div>
</form>
@stop