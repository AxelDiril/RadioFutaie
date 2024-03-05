<?php
 */
require_once 'MP3/Playlist/Common.php';

 */
class MP3_Playlist_M3U extends MP3_Playlist_Common
{
    // {{{ Object Properties

    /**
     * Mime type of output.
     * @var string
     */
    protected $mimeType = 'audio/x-mpegurl';

    /**
     * File extension (without dot).
     * @var string
     */
    protected $fileExtension = 'm3u';

    /**
     * Force M3U format is not viewable by browser.
     * @var bool
     */
    protected $isViewable = false;

    // }}}
    // {{{ make()

    /**
     * Generates the M3U playlist format.
     *
     * @param array $params (optional) No parameters, ignore this.
     *
     * @return  bool TRUE
     */
    public function make($params = array())
    {
        // checking if we need to shuffle the filelist inside the array or not
        if ($this->isShuffle == true) {
            shuffle($this->list);
        }

        // array glue keeping one file per line as per m3u standards
        $this->result = implode("\n", $this->list);

        return true;
    }

    // }}}
}

// }}}

/*
 * Local variables:
 * mode: php
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
?>