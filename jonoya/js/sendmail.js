//$(document).ready(function(){

    // ajaxメールフォーム
    (function() {

        var server = 'sendmail.php'; //送信先サーバーのURLを設定する;

        var xhr = new XMLHttpRequest();
        var form = document.getElementById('contact-form');
        var formHTML = form.innerHTML;
        var tempForm = {};

        form.onsubmit =  function(e){
            e.preventDefault();

            //多重送信を防止;
            var submit = form.querySelector('button[type="submit"]');
            submit.disabled = 'disabled';

            //formの内容を保存;
            (function() {
                var elements = form.elements;
                for(var i = 0; i < elements.length; i++) {
                    tempForm[elements[i].name] = elements[i].value;
                }
            })();

            // 入力内容の判定
            (function() {
                var error = '';
                // 電話とメールが両方入力されていないとNG
                // メッセージが空欄だとNG


                if (error) {
                    document.getElementById('error').textContent = error;
                    return false;
                }
            })();

            //サーバーにFormDataを送信;
            (function() {
                //FormDataを取得
                var formData = new FormData(form);

                xhr.open('POST', server);
                //カスタムヘッダーをつける;
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                //結果はjsonだが、IEが対応していないのでtextで受け取る;
                xhr.responseType = 'text';
                xhr.timeout = '10000';
                xhr.send(formData);
            })();
        };

        xhr.addEventListener('loadend', function() {
            //formのchildNodesを全て消す;
            (function removeAllChild(element) {
                var child;
                while(child = element.firstChild) {
                    element.removeChild(child);
                }
            })(form);

            //送信後に表示する要素;
            var resultElements = (function createResultElements() {
                var elements = {};
                elements.df = document.createDocumentFragment();
                elements.p = document.createElement('p');
                elements.back = document.createElement('button');
                elements.back.type = 'button';
                elements.back.textContent = '戻る';
                elements.df.appendChild(elements.p);
                elements.df.appendChild(elements.back);
                return elements;
            })();
            form.appendChild(resultElements.df);

            if ( xhr.status === 200 ) {
                var response = JSON.parse(xhr.response);
                if( response.result ) {
                    //メールが送信された時の処理;
                    resultElements.p.textContent = 'お問い合わせいただき誠にありがとうございます！担当者が確認次第、折り返しご連絡させていただきます。お急ぎの方は、お電話でのご連絡をお願いいたします。';
                    resultElements.p.setAttribute('class', 'result-success');
                    resultElements.back.onclick = function() {
                        form.innerHTML = formHTML;
                    };
                    return;
                }
            }
            //メールが送信されなかった時の処理;
            resultElements.p.textContent = '送信に失敗しました。再度お試しください。繰り返しこのエラーが表示される場合、大変恐れ入りますがお電話でのご連絡をお願いいたします。';
            resultElements.p.setAttribute('class', 'result-error');
            resultElements.back.onclick = function() {
                form.innerHTML = formHTML;
                var elements = form.elements;
                for(var i = 0; i < elements.length; i++) {
                    elements[i].value = tempForm[elements[i].name];
                }
            };
        }, false);
    })();
//});
