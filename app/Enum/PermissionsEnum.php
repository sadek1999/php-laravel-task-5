<?php

namespace App\Enum;

enum PermissionsEnum: string
{
    case ManageFeature = 'manageFeature';
    case ManageComment = 'manageComment';
    case ManageUsers = 'manageUsers';
    case UpvoteDownvote = 'upvoteDownvote';
}
