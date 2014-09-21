'use strict';

/**************************************************/
/***************** MAIN JAVASCRIPT ****************/
/**************************************************/

/* Firstly, I put a listener on the Dom, to be sure the DOM is known before to call my Js application. */
$(document).ready(function()
{
    /* I choose to make the second part of the exercice mainly with PHP. I just keep the toggle*/
    $("#add_task").on("click", onClickAddTask);
});
