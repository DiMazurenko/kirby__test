module.exports = {
	env: {
		browser: true,
		es2021: true,
		jest: true
	},
	extends: [
		'standard-with-typescript',
		'plugin:react/recommended',
		'plugin:i18next/recommended',
		'plugin:storybook/recommended'
	],
	overrides: [
		{
			env: {
				node: true
			},
			files: ['.eslintrc.{js,cjs}', '**/src/**/*.test.{ts,tsx}'],
			rules: {'i18next/no-literal-string': 'off'},
			parserOptions: {
				sourceType: 'script'
			}
		}
	],
	parserOptions: {
		ecmaVersion: 'latest',
		sourceType: 'module'
	},
	plugins: ['react', '@typescript-eslint', 'i18next', 'react-hooks'],
	rules: {
		// 'react/jsx-indent': [2, 4],
		// 'react/jsx-indent-props': [2, 4],
		// 'indent': [2, 4],
		"no-tabs": 0,
		'import/prefer-default-export': 'off',
		'no-unused-vars': 'warn',
		'react/require-default-props': 'off',
		'react/react-in-jsx-scope': 'off',
		'react/jsx-props-no-spreading': 'warn',
		'react/function-component-definition': 'off',
		'import/extensions': 'off',
		'import/no-extraneous-dependencies': 'warn',
		'no-underscore-dangle': 'off',
		'@typescript-eslint/explicit-function-return-type': 'off',
		'@typescript-eslint/prefer-nullish-coalescing': 'off',
		'@typescript-eslint/strict-boolean-expressions': 'off',
		'@typescript-eslint/naming-convention': 'off',
		'i18next/no-literal-string': [
			'error',
			{markupOnly: true, ignoreAttribute: ['data-testid', 'to']}
		],
		'max-len': ['error', {ignoreComments: true, code: 100}],
		'react-hooks/rules-of-hooks': 'error',
		'react-hooks/exhaustive-deps': 'error'
	},
	globals: {
		__IS_DEV__: true
	}
};
