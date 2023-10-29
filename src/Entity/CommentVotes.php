<?php

namespace tizis\laraComments\Entity;

use Illuminate\Database\Eloquent\Model;
use tizis\laraComments\Contracts\Vote;

class CommentVotes extends Model implements Vote
{

    protected $fillable = ['commenter_id', 'commenter_vote'];


    /**
     * The user who make vote.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commenter()
    {
        return $this->belongsTo(config('comments.models.commenter'));
    }

    public function updateCommenterVote($updatedVote):void {
        $this->update([
            'commenter_vote' => $updatedVote
        ]);
    }
}
