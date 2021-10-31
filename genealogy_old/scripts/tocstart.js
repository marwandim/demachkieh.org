        function doResize() {
                 document.getElementById('toc').style.height = parseInt(getInnerHeight() - 110) + 'px';
        };
        $(function () {
                   tocSetToggle();
                   PageInit(true, '','names');
                   doResize();
                   window.onresize=doResize;
                });
