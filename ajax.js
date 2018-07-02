function ajax(params) {
    var _default = {
        method: 'GET', //请求方式
        url: null, //请求地址
        data: null, //请求数据
        timeout: 1000,
        dataType: 'json',
        success: function() {},
        errro: function() {} //成功
    }
    for (var i in params) {
        // 将传进来的值，遍历赋值给默认值，如果你传进来，
    }
}