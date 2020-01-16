document.addEventListener('DOMContentLoaded', function(){
    document.querySelector('.js-like-article').addEventListener('click', function(e){
        e.preventDefault();

        let anchor = e.currentTarget;
        anchor.classList.toggle('fa-heart-o');
        anchor.classList.toggle('fa-heart');

        fetch(anchor.href, {method: 'POST'})
            .then(function(response){
                return response.json();
            })
            .then(function(data){
                document.querySelector('.js-like-article-count').innerHTML = data.hearts;
            });
    });
});