<?php

arch('it will not use debugging functions')
    ->expect(['dd', 'dump', 'die', 'exit', 'ray'])
    ->each->not->toBeUsed();
