window.addEventListener('load', function(){
    axios({
        method: 'get',
        url: 'http://bit.ly/2mTM3nY',
        responseType: 'stream'
      })
        .then(function (response) {
          response.data.pipe(fs.createWriteStream('ada_lovelace.jpg'))
        });
})