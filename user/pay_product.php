<?php
require_once('header.php');

$url = "http://";
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   
    
// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];

$url_components = parse_url($url);
// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
$id = $params['id'];

?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Sen&display=swap');

    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Oxygen', sans-serif;
    }
    :root{
        /* Font Size */
        --heading: 2.5rem;
        --s_head: 2rem;
        --text: 1.5rem;
        --s_text: 1rem;
    }
    .payall{
        background-color: #093e5f;
    }
    .pay{
        min-height: 100vh;
        
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .center{
        background: #ffffff;
        border-radius: 3em 0 3em 0;
        margin: 2em;
    }

    .payment-box{
        max-width: 500px;
        padding: .5em .8em 1em .8em;
        
    }

    .pay-h{
        font-size: var(--heading);
        text-align: center;
        margin-bottom: .6em;
    }

    form label{
        display: block;
        font-size: var(--text);
        margin-bottom: .4em;
    }

    form input{
        font-family: 'Sen', sans-serif;
        font-weight: 600;
        font-size: var(--s_text);
        padding: 0.4em .3em;
        margin-left: .6em;
        outline: none;
        letter-spacing: .3em;
        margin-bottom: .7em;
    }

    input::placeholder{
        font-weight: 100;
        color: rgb(179, 179, 179);
    }

    .cc-number{
        background: url(https://bit.ly/3QaanyT)  no-repeat;
        width: 90%;
    }

    .expiry-month{
        background: url(https://bit.ly/3zK1dn6) no-repeat;
        width: 20%;
    }

    .expiry-year{
        background: url(https://bit.ly/3oIcwG8) no-repeat;
        width: 30%;
    }

    .cvv{
        background: url(https://bit.ly/3PJ0qse) no-repeat;
        width: 25%;
    }

    .card-holder{
        background: url(https://bit.ly/3oJUPG8) no-repeat;
        width: 90%;
    }

    .icon{
        background-position: .4em .2em;
        background-size: 25px;
        padding-left: 3em;
        border: 1px solid black;
        border-radius: 5px;
    }

    .pay-now{
        display: block;
        margin: .6em auto;
        width: 60%;
        padding: 0.5em;
        border: 1px solid black;
        border-radius: 5px;
        background-color: white;
    }

    .pay_text{
        font-size: var(--s_text);
        vertical-align: middle;
    }

    .pay_icon{
        width: 20px;
        margin-right: 1em;
        vertical-align: middle;
    }

    .pay_icon:hover, .pay-icon:focus{
        filter: invert(100%);
    }

    .pay-now:hover, .pay-now:focus{
        cursor: pointer;
        background-color: #093e5f;
        color: rgb(255, 255, 255);
    }

    /* For  smaller mobile device  */

    @media (min-width:100px) and (max-width:250px){
        :root{
            /* Font Size */
            --heading: 1.8rem;
            --s_head: 1.5rem;
            --text: 1rem;
            --s_text: 0.7rem;
        }
        .center{
            
            margin: 1em;
        }
        .payment-box{
            max-width: 230px;
        }
        form input{
            letter-spacing: 0.1em;
        }
        .expiry-month{
            width: 30%;
        }
        .expiry-year{
            width: 40%;
        }
        .cvv{
            width: 40%;
        }
        .icon{
            background-position: .4em;
            background-size: 10px;
            padding-left: 2em;
        }
        .pay_icon{
            width: 10px;
        }
    }

    /* For mobile device  */
    @media (min-width:251px) and (max-width:450px){
        :root{
            /* Font Size */
            --heading: 2.4rem;
            --s_head: 2rem;
            --text: 1.2rem;
            --s_text: 1rem;
        }

        .payment-box{
            max-width: 350px;
        }
        form input{
            letter-spacing: .3em;
        }
        .icon{
            background-position: .4em;
            background-size: 15px;
            padding-left: 2em;
        }
        .expiry-month{
            width: 28%;
        }
        .expiry-year{
            width: 40%;
        }
        .cvv{
            width: 40%;
        }
    }

    /* For 4k & Full HD+  */
    @media (min-width:1921px){
        :root{
            /* Font Size */
            --heading: 6rem;
            --s_head: 3rem;
            --text: 2.5rem;
            --s_text: 2.2rem;
        }
        .payment-box{
            max-width: 1500px;
        }
        .icon{
            background-size: 50px;
        }
        .pay_icon{
            width: 50px;
        }
    }

</style>


<div class="payall">

    <div class="container pay">
        <div class="center">
            <div class="payment-box">
                <h1 class="pay-h">Card Details</h1>

                <form class="form" action="../backend/pay_place.php" method="post">
                    <label for="Card Number">No.Tickets</label>
                    <input class="cc-number" name="num" required placeholder="Number of tickects" type="number">
                    
                    <label for="Card Number">Card Number</label>

                    <input class="cc-number icon" maxlength="16" name="card-number" pattern="\d*" required placeholder="XXXX XXXX XXXX" type="tel">

                    <label for="Expiry Date">Expiry Date</label>
                    <input class="expiry-month icon" type="tel" maxlength="2" name="expiry-month" pattern="\d*" required placeholder="01">
                    <input class="expiry-year icon" type="tel" maxlength="4" name="expiry-year" pattern="\d*" required placeholder="0000">

                    <label for="CVV">CVV</label>
                    <input class="cvv icon" type="tel" maxlength="3" name="cvv" pattern="\d*" required placeholder="XXX">

                    <input class="card-holder icon" type="text" placeholder="Cardholder Name">
                    <input type="hidden" name="id" value="<?php echo $id ?>">

                    <button class="pay-now" type="submit" name="pay">
                        <img src="https://bit.ly/3Q8KZcM" alt="" class="pay_icon">
                        <span class="pay_text">Pay Now</span>
                    </button>

                </form>
            </div>
        </div>
    </div>

</div>

<?php
require_once('footer.php');
?>