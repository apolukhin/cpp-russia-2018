<div class="cpp-b_talk row-col">
    <div class="talk-head">
        <div class="talk-date-track">
            <div class="date">
                <?php echo $speaker->talk->date; ?>
            </div>
            <div class="track">
                <?php
                $colspan = property_exists($speaker->talk, 'colspan') ? $speaker->talk->colspan : 1;
                if ($colspan == 1)
                    echo ucwords($speaker->talk->track);
                else
                    echo "Track A";
                ?><br>
                <?php echo $speaker->talk->time; ?>
            </div>
        </div>
        <div class="talk-speaker-photo">
            <img src="<?php echo $speaker->speaker->images[0]; ?>" alt="<?php echo $speaker->speaker->name; ?>">
        </div>
    </div>
    <div class="talk-speaker-name">
        <?php
        $locale = get_locale();
        if ($locale == "ru")
            $speaker_name = $speaker->speaker->name;
        else
            $speaker_name = transliterator_transliterate('Cyrillic-Latin', $speaker->speaker->name);
        echo $speaker_name;
        ?>
    </div>
    <div class="talk-content-fixed">
        <div class="talk-title">
            <div class="cpp-e_title-small">
                <?php echo $speaker->talk->title; ?>
            </div>
        </div>
        <div class="talk-description">
            <?php echo $speaker->talk->description; ?>
        </div>
    </div>

    <div class="talk-footer">
        <?php
        print "<a class=\"talk-link\" href=\"/talks/" . $speaker->speaker->dirname . lang_prefix() . "\">" . tr("more") .  "</a>"
        ?>
    </div>
</div>
