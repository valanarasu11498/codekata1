#include <stdio.h>

int main()
{
    int y,i,sum=0;
    scanf("%d",&y);
    if(y>0)
    {
        for(i=1;i<=y;i++)
        {
            sum=sum+i;
        }
    }
    else
    {
        return 0;
    }
    printf("%d",sum);
    return 0;
}
