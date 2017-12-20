<?php

require __DIR__ . '/../lib/Horde/Text/Diff.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Exception.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Mapped.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Renderer.php';
require __DIR__ . '/../lib/Horde/Text/Diff/ThreeWay.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Op/Base.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Op/Add.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Op/Change.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Op/Copy.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Op/Delete.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Renderer/Context.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Renderer/Inline.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Renderer/Unified.php';
require __DIR__ . '/../lib/Horde/Text/Diff/ThreeWay/BlockBuilder.php';
require __DIR__ . '/../lib/Horde/Text/Diff/ThreeWay/Op/Base.php';
require __DIR__ . '/../lib/Horde/Text/Diff/ThreeWay/Op/Copy.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Engine/Native.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Engine/Shell.php';
require __DIR__ . '/../lib/Horde/Text/Diff/Engine/String.php';