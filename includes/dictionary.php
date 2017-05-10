<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function set_dictionary_transient() {

$prohibited_terms = array(
'You\'d',
'you\'d',
'You\'re',
'you\'re',
'party',
'Party',
'Everyone',
'everyone',
'name',
'Name',
'very',
'Very',
'through',
'Through',
'just',
'Just',
'form',
'Form',
'much',
'Much',
'great',
'Great',
'think',
'Think',
'that',
'That',
'help',
'Help',
'line',
'Line',
'before',
'Before',
'turn',
'Turn',
'cause',
'Cause',
'with',
'With',
'same',
'Same',
'mean',
'Mean',
'differ',
'Differ',
'move',
'Move',
'they',
'They',
'right',
'Right',
'have',
'Have',
'does',
'Does',
'this',
'This',
'tell',
'Tell',
'from',
'From',
'sentence',
'Sentence',
'three',
'Three',
'want',
'Want',
'well',
'Well',
'some',
'Some',
'also',
'Also',
'what',
'What',
'play',
'Play',
'there',
'There',
'small',
'Small',
'home',
'Home',
'other',
'Other',
'read',
'Read',
'were',
'Were',
'hand',
'Hand',
'port',
'Port',
'your',
'Your',
'large',
'Large',
'when',
'When',
'spell',
'Spell',
'even',
'Even',
'word',
'Word',
'land',
'Land',
'here',
'Here',
'said',
'Said',
'must',
'Must',
'each',
'Each',
'high',
'High',
'such',
'Such',
'which',
'Which',
'follow',
'Follow',
'their',
'Their',
'time',
'Time',
'will',
'Will',
'change',
'Change',
'went',
'Went',
'about',
'About',
'light',
'Light',
'many',
'Many',
'kind',
'Kind',
'then',
'Then',
'them',
'Them',
'need',
'Need',
'would',
'Would',
'house',
'House',
'write',
'Write',
'picture',
'Picture',
'like',
'Like',
'these',
'These',
'again',
'Again',
'animal',
'Animal',
'long',
'Long',
'point',
'Point',
'make',
'Make',
'mother',
'Mother',
'thing',
'Thing',
'world',
'World',
'near',
'Near',
'build',
'Build',
'self',
'Self',
'earth',
'Earth',
'look',
'Look',
'father',
'Father',
'more',
'More',
'head',
'Head',
'stand',
'Stand',
'could',
'Could',
'page',
'Page',
'come',
'Come',
'should',
'Should',
'country',
'Country',
'found',
'Found',
'sound',
'Sound',
'answer',
'Answer',
'school',
'School',
'most',
'Most',
'grow',
'Grow',
'number',
'Number',
'study',
'Study',
'still',
'Still',
'over',
'Over',
'learn',
'Learn',
'know',
'Know',
'plant',
'Plant',
'water',
'Water',
'cover',
'Cover',
'than',
'Than',
'food',
'Food',
'call',
'Call',
'first',
'First',
'four',
'Four',
'people',
'People',
'thought',
'Thought',
'down',
'Down',
'keep',
'Keep',
'side',
'Side',
'been',
'Been',
'never',
'Never',
'last',
'Last',
'find',
'Find',
'door',
'Door',
'between',
'Between',
'city',
'City',
'work',
'Work',
'tree',
'Tree',
'part',
'Part',
'cross',
'Cross',
'take',
'Take',
'since',
'Since',
'hard',
'Hard',
'place',
'Place',
'start',
'Start',
'made',
'Made',
'might',
'Might',
'live',
'Live',
'story',
'Story',
'where',
'Where',
'after',
'After',
'back',
'Back',
'little',
'Little',
'draw',
'Draw',
'only',
'Only',
'left',
'Left',
'round',
'Round',
'late',
'Late',
'year',
'Year',
'came',
'Came',
'while',
'While',
'show',
'Show',
'press',
'Press',
'every',
'Every',
'close',
'Close',
'good',
'Good',
'night',
'Night',
'real',
'Real',
'give',
'Give',
'life',
'Life',
'under',
'Under',
'stop',
'Stop',
'open',
'Open',
'seem',
'Seem',
'simple',
'Simple',
'together',
'Together',
'several',
'Several',
'next',
'Next',
'vowel',
'Vowel',
'white',
'White',
'toward',
'Toward',
'children',
'Children',
'begin',
'Begin',
'against',
'Against',
'walk',
'Walk',
'pattern',
'Pattern',
'example',
'Example',
'slow',
'Slow',
'ease',
'Ease',
'center',
'Center',
'paper',
'Paper',
'love',
'Love',
'often',
'Often',
'person',
'Person',
'always',
'Always',
'money',
'Money',
'music',
'Music',
'serve',
'Serve',
'those',
'Those',
'appear',
'Appear',
'both',
'Both',
'road',
'Road',
'mark',
'Mark',
'book',
'Book',
'science',
'Science',
'letter',
'Letter',
'rule',
'Rule',
'until',
'Until',
'govern',
'Govern',
'mile',
'Mile',
'pull',
'Pull',
'river',
'River',
'cold',
'Cold',
'notice',
'Notice',
'feet',
'Feet',
'voice',
'Voice',
'care',
'Care',
'fall',
'Fall',
'second',
'Second',
'power',
'Power',
'group',
'Group',
'town',
'Town',
'carry',
'Carry',
'fine',
'Fine',
'took',
'Took',
'certain',
'Certain',
'rain',
'Rain',
'unit',
'Unit',
'room',
'Room',
'lead',
'Lead',
'friend',
'Friend',
'began',
'Began',
'dark',
'Dark',
'idea',
'Idea',
'machine',
'Machine',
'fish',
'Fish',
'note',
'Note',
'mountain',
'Mountain',
'wait',
'Wait',
'north',
'North',
'plan',
'Plan',
'once',
'Once',
'figure',
'Figure',
'base',
'Base',
'star',
'Star',
'hear',
'Hear',
'horse',
'Horse',
'noun',
'Noun',
'field',
'Field',
'sure',
'Sure',
'rest',
'Rest',
'watch',
'Watch',
'correct',
'Correct',
'color',
'Color',
'able',
'Able',
'face',
'Face',
'pound',
'Pound',
'wood',
'Wood',
'done',
'Done',
'main',
'Main',
'beauty',
'Beauty',
'enough',
'Enough',
'drive',
'Drive',
'plain',
'Plain',
'stood',
'Stood',
'girl',
'Girl',
'contain',
'Contain',
'usual',
'Usual',
'front',
'Front',
'young',
'Young',
'teach',
'Teach',
'ready',
'Ready',
'week',
'Week',
'above',
'Above',
'final',
'Final',
'ever',
'Ever',
'gave',
'Gave',
'green',
'Green',
'list',
'List',
'though',
'Though',
'quick',
'Quick',
'feel',
'Feel',
'develop',
'Develop',
'talk',
'Talk',
'sleep',
'Sleep',
'bird',
'Bird',
'warm',
'Warm',
'soon',
'Soon',
'free',
'Free',
'body',
'Body',
'minute',
'Minute',
'strong',
'Strong',
'family',
'Family',
'special',
'Special',
'direct',
'Direct',
'mind',
'Mind',
'pose',
'Pose',
'behind',
'Behind',
'leave',
'Leave',
'clear',
'Clear',
'song',
'Song',
'tail',
'Tail',
'measure',
'Measure',
'produce',
'Produce',
'state',
'State',
'fact',
'Fact',
'product',
'Product',
'street',
'Street',
'black',
'Black',
'inch',
'Inch',
'short',
'Short',
'numeral',
'Numeral',
'nothing',
'Nothing',
'class',
'Class',
'course',
'Course',
'wind',
'Wind',
'stay',
'Stay',
'question',
'Question',
'wheel',
'Wheel',
'happen',
'Happen',
'full',
'Full',
'complete',
'Complete',
'force',
'Force',
'ship',
'Ship',
'blue',
'Blue',
'area',
'Area',
'object',
'Object',
'half',
'Half',
'decide',
'Decide',
'rock',
'Rock',
'surface',
'Surface',
'order',
'Order',
'deep',
'Deep',
'fire',
'Fire',
'moon',
'Moon',
'south',
'South',
'island',
'Island',
'problem',
'Problem',
'foot',
'Foot',
'piece',
'Piece',
'told',
'Told',
'busy',
'Busy',
'knew',
'Knew',
'test',
'Test',
'pass',
'Pass',
'record',
'Record',
'farm',
'Farm',
'boat',
'Boat',
'common',
'Common',
'whole',
'Whole',
'gold',
'Gold',
'king',
'King',
'possible',
'Possible',
'size',
'Size',
'plane',
'Plane',
'heard',
'Heard',
'best',
'Best',
'hour',
'Hour',
'wonder',
'Wonder',
'better',
'Better',
'laugh',
'Laugh',
'true',
'True',
'thousand',
'Thousand',
'during',
'During',
'hundred',
'Hundred',
'check',
'Check',
'remember',
'Remember',
'game',
'Game',
'step',
'Step',
'shape',
'Shape',
'early',
'Early',
'hold',
'Hold',
'west',
'West',
'miss',
'Miss',
'ground',
'Ground',
'brought',
'Brought',
'interest',
'Interest',
'heat',
'Heat',
'reach',
'Reach',
'snow',
'Snow',
'fast',
'Fast',
'five',
'Five',
'bring',
'Bring',
'sing',
'Sing',
'listen',
'Listen',
'perhaps',
'Perhaps',
'fill',
'Fill',
'table',
'Table',
'east',
'East',
'travel',
'Travel',
'weight',
'Weight',
'less',
'Less',
'language',
'Language',
'morning',
'Morning',
'among',
'Among',
'I\'ve',
'We\'re',
'we\'re',
'save',
'Save',
'spells',
'Spells',
'magic',
'Magic',
'fight',
'Fight',
'breath',
'Breath',
'Pine',
'pine');

	set_transient( 'rss_tags_dictionary', $prohibited_terms );

	return $prohibited_terms;

}