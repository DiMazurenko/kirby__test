import {useTranslation} from 'react-i18next';
import {Counter} from 'entities/Counter';
import {Input} from 'shared/ui/Input/Input';
import {useState} from 'react';

const MainPage = () => {
	const {t} = useTranslation();

	const [value, setValue] = useState('');
	const onChange = (val: string) => {
		setValue(val);
	};

	return (
		<div>
			{t('Главная страница')}
			<Input value={value} onChange={onChange} placeholder="Введите текст"/>
		</div>
	);
};

export default MainPage;
