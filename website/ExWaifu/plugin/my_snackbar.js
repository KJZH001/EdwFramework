var $$ = mdui.JQ;

$$('#我是开始按钮233').on('click', function () {
  mdui.snackbar({
    message: '233,你被骗了→_→',
    position: 'left-bottom'
  });
});

$$('#我才是真的').on('click', function () {
  mdui.snackbar({
    message: '你个怪蜀黍~哼╭(╯^╰)╮',
    position: 'left-bottom'
  });
});
