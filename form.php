<div class="container box">

    <h1 class="center">parkingomat.com</h1>
    <h2 class="small">Filter, Read all domains from many different plesk panels</h2>

    <form method="post" action="" target="#nameserver_list">
        <fieldset>

            <legend>DNS</legend>

            <label for="domains">
                1. Enter domain names with nameservers at point no. 3
            </label>
            <textarea name="domains" id="domains" cols="75" rows="20"><?php echo $_POST["domains"] ?></textarea>
            <br/>
            <br/>

            <label for="dns_url_list">
                2. Show url to panel where domain is registered:
            </label>
            <br/>
            <input type="submit" name="set_domain_list" id="set_domain_list" value="Show URLs to Change DNS"
                   class="btn btn-info btn-lg"/>
            <br/>

            <br/>
        </fieldset>
    </form>

</div>
<div style="clear:both"></div>
<br/>
<hr>