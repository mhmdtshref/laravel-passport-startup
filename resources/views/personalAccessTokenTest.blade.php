

    <?php $scope = [] ?>

    <form action="/oauth/personal-access-tokens" method="post">

        <input type="text" name="name" id="name">
        <input type="hidden" value="<?php $scope ?>">

        <input type="submit" value="Add">

    </form>




