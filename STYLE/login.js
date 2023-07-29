        const login = document.querySelector('.login_js')
        const modalJS =document.querySelector('.js-modal')
        const modalClose =document.querySelector('.js-modal-close')
        const modalContainer = document.querySelector('.js-modal-container')

        function showLogin(){
            modalJS.classList.add('open')
        }
        function removeLogin(){
            modalJS.classList.remove('open')
        }
        login.addEventListener('click', showLogin)
        modalClose.addEventListener('click', removeLogin)
        modalJS.addEventListener('click', removeLogin)
        
        /*khi dùng mode remove ở trên sẽ xảy ra hiện tượng bấm vào đâu 
            nó cũng sẽ out khỏi phânf buy tickets 
            nên ta dùng thêm 1 hàm event có stopPropagation để csửa lỗi này        
        */
        modalContainer.addEventListener('click', function (event) {
            event.stopPropagation()
       })