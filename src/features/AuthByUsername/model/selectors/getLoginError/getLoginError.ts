import { type StateSchema } from 'app/providers/StoreProvider';
import { type DeepPartial } from '@reduxjs/toolkit';

export const getLoginError = (state: StateSchema) => state?.loginForm?.error;
