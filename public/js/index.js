addListener();
function addListener() {
    $('.page-item').click(function(e) {
        e.preventDefault();
        const button = e.target.innerHTML;
        call(button);
    });
    $('.editButton').click(function (e) {
        $('#form1' + e.target.name).css({"display": "block"})
    });
    $('.deleteButton').click(function (e) {
        console.log(e.target.name);
        $('#form2' + e.target.name).css({"display": "block"})
    });
}

function call(button) {
    fetch('http://auth1/clients?page='+button)
        .then(function(response) {
            return response.text()
        })
        .then(function(html) {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, "text/html").body;
            $('body').html(doc);
            addListener();
        })
        .catch(function(err) {
            console.log('Failed to fetch page: ', err);
        });
}
